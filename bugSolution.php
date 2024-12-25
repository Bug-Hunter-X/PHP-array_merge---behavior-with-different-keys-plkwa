function foo(array $arr): array {
  if (empty($arr)) {
    return [];
  }

  $result = [];
  foreach ($arr as $value) {
    if (is_array($value)) {
      // Correct way to add elements to the result array
      $result = array_merge($result, foo($value)); 
    } else {
      array_push($result,$value);
    }
  }
  return $result;
}