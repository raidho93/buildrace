<?php

namespace Drupal\Tests\message\Functional;

use Drupal\message\Entity\Message;

/**
 * Test the views text handler.
 *
 * @group Message
 */
class MessageTextHandlerTest extends MessageTestBase {

  /**
   * The user object.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $account;

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    $this->account = $this->drupalCreateUser(['overview messages']);
  }

  /**
   * Testing the deletion of messages in cron according to settings.
   */
  public function testTextHandler() {
    $this->createMessageTemplate('dummy_message', 'Dummy message', '', ['Dummy text message']);
    Message::create(['template' => 'dummy_message'])->save();

    $this->drupalLogin($this->account);
    $this->drupalGet('admin/content/messages');
    $this->assertText('Dummy text message');
  }

}
