Answer of 1.
{html_options name=foo options=$myOption selected=$myOption}
<br>

Answer of 2.
{* 2. Example of Escape*}
{$str|escape}
<br>

Answer of 4.
{* 4. Example of Concatenation*}
{$str2|cat:" Concatenation"}
<br>

Answer of 8.
{* 8. *}
{foreach $our_culture as $ar}
{foreach $ar as $a}
<ul><li>{$a}</li></ul>
{/foreach}
{/foreach}
<br>

Answer of 5.
{* 5. {counter is used to print out a count} {cycle is used to alternate a set of values}*}
{counter name=val start=1}
{cycle name=name values=4}








