function foo(array $arr): array {
  if (empty($arr)) {
    return [];
  }

  $result = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
      // This is wrong way of using array_merge
      $result = array_merge($result, foo($value)); 
    } else {
      $result[] = $value;
    }
  }
  return $result;
}