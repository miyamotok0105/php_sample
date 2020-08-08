<?php

abstract class AbstractClass1
{
    // 拡張クラスにこのメソッドの定義を強制する
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}


?>
