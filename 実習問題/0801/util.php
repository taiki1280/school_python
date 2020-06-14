<?php
function es($data)
{
  if (is_array($data)) {
    return array_map(__METHOD__, $data);
  } else {
    // クロスサイトスクリプティング対策
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
  }
}

// 配列の文字エンコードのチェックを行う
function cken(array $data)
{
  $result = true;
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      // 含まれている値が配列のとき文字列に連結する
      $value = implode("", $value);
    }
    if (!mb_check_encoding($value)) {
      // 文字エンコードが一致しないとき
      $result = false;
      break;
    }
  }
  return $result;
}
