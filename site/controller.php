<?php
defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class DevotionsController extends JController {
    function display() {
        parent::display();
    }
    
    function new_devotion() {
		$user 	=& JFactory::getUser();

		if (!$user->get('guest')) {
			JRequest::setVar('layout', 'admin');
		}
        parent::display();
    }

    function save_devotion() {
		$user 	=& JFactory::getUser();

		if (!$user->get('guest')) {
			JRequest::setVar('layout', 'admin');
		}
        parent::display();
    }
}