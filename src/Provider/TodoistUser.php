<?php

namespace SumaerJolly\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

class TodoistUser implements ResourceOwnerInterface
{
  use ArrayAccessorTrait;

  /**
   * @var array
   */
  protected $response;

  /**
   * @param array $response
   */
  public function __construct(array $response)
  {
    $this->response = $response;
  }

  public function getId()
  {
    return $this->data['user']['id'];
  }

  public function getEmail()
  {
    return $this->data['user']['email'];
  }

  public function getName()
  {
    return $this->data['user']['full_name'];
  }

  public function toArray()
  {
    return $this->response;
  }
}
