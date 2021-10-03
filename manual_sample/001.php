<?php

echo "特殊文字を HTML エンティティに変換する";

echo htmlspecialchars('ようこそ', ENT_QUOTES, 'UTF-8');
echo htmlspecialchars('こんにちは', ENT_QUOTES, 'UTF-8');
echo htmlspecialchars('こんばんは', ENT_QUOTES, 'UTF-8');
echo htmlspecialchars('さようなら', ENT_QUOTES, 'UTF-8');


echo htmlspecialchars(date('G:i'));
