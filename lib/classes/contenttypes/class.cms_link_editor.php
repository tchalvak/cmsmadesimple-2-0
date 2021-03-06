<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2008 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id$

class CmsLinkEditor extends CmsContentEditorBase
{
	public function __construct($content_obj)
	{
		parent::__construct($content_obj);
		
		$profile = $this->get_profile();
		$profile->add_attribute(new CmsContentTypeProfileAttribute('url','main'));
		$profile->remove_by_name('cachable');
		$profile->remove_by_name('secure');
	}
	
	
	protected function get_single_element($content_obj,&$attr,$adding = false)
	{
		$prompt = '';
		$field = '';
		switch( $attr->get_name() )
		{
		case 'url':
			$prompt = lang('url');
			$field = '<input type="text" name="url" value="'.cms_htmlentities($content_obj->get_property_value('url')).'" size="80" />';
			break;

		default:
			return parent::get_single_element($content_obj,$attr,$adding);
		}

		if( !empty($prompt) && !empty($field) )
		{
			return array($prompt.':',$field);
		}
	}

	public function fill_from_form_data($params)
	{
		parent::fill_from_form_data($params);
		$content_obj = $this->get_content();
		$accepted = array('url');
		foreach( $accepted as $one )
		{
			if( isset($params[$one]) )
			{
				$content_obj->set_property_value($one,$params[$one]);
			}
		}
	}

	public function validate()
	{
		// here we make sure that all the attributes we've disabled
		// are set to the appropriate values.
		$content_obj = $this->get_content();
		$content_obj->set_secure(0);
		$content_obj->set_cachable(0);

		// do the rest of the validation.
		$errs = parent::validate();
		if( !$errs )
		{
			$errs = array();
		}

		$content_obj = $this->get_content();
		$url = $content_obj->get_property_value('url');
		if( empty($url) )
		{
			$errs[] = lang('nofieldgiven',array(lang('url')));
		}

		if( count($errs ) ) return $errs;
		return FALSE;
	}
} // end of class.

#
# EOF
#
?>