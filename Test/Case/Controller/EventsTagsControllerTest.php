<?php
App::uses('EventsTagsController', 'Controller');

/**
 * TestEventsTagsController *
 */
class TestEventsTagsController extends EventsTagsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * EventsTagsController Test Case
 *
 */
class EventsTagsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.events_tag', 'app.event', 'app.event_type', 'app.task_note', 'app.tag', 'app.contact', 'app.contact_status', 'app.user', 'app.user_group', 'app.user_group_permission', 'app.deal', 'app.deal_status', 'app.deal_note', 'app.deals_tag', 'app.login_token', 'app.events_user', 'app.contact_note', 'app.contacts_tag');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventsTags = new TestEventsTagsController();
		$this->EventsTags->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventsTags);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
