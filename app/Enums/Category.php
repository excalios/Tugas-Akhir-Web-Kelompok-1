<?php

namespace App\Enums;

enum Category: string
{
  case News = 'News';
  case Feature = 'Feature';
  case Guide = 'Guide';
  case Release = 'Release';
  case Review = 'Review';
}
