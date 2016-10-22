<?php
class Array_Example {
  private $arr = array();

  /**
   * construct array with specific range
   * @param [Integer] $start
   * @param [Integer] $end
   */
  function __construct($start, $end) {
    for ($i = $start - 1; $i < $end; $i++) {
      $arr[] = rand($start, $end);
    }

    $this->arr = $arr;
  }

  /**
   * getter
   * @return [Array]
   */
  public function getter() {
    return $this->arr;
  }

  /**
   * setter
   * @param  [Array] $arr
   */
  public function setter($arr) {
    $this->arr = $arr;
  }

  /**
   * remove specific element from array
   * @param  [Integer] $element
   */
  public function remove_element($element) {
    if (in_array($element, $this->arr)) {
      unset($this->arr[array_search($element, $this->arr)]);

      // rebase array keys after unsetting elements
      $this->arr = array_values($this->arr);
    }
  }

  /**
   * get max element
   * @return [Integer]
   */
  public function get_max_element() {
    return max($this->arr);
  }

  /**
   * get numerous element
   * @return [Integer]
   */
  public function get_numerous() {
    $temp_arr       = array_unique($this->arr);
    $occurrence_arr = array();

    foreach ($temp_arr as $temp_ele) {
      $count = 0;

      foreach ($this->arr as $ele) {
        if ($temp_arr === $ele) {
          $count++;
        }
      }

      $occurrence_arr[$temp_ele] = $count;
    }

    return array_search(max($occurrence_arr), $occurrence_arr);
  }

  /**
   * shuffle array
   */
  public function shuffle() {
    for ($i = count($this->arr); $i > 0; $i--) {
      $rand_index             = floor(lcg_value(0, 1) * $i);
      $temp                   = $this->arr[$i - 1];
      $this->arr[$i - 1]      = $this->arr[$rand_index];
      $this->arr[$rand_index] = $temp;
    }
  }
}
?>