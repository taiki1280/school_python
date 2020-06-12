<?php
interface Gamebook{
    function newGame($point);
    function play();
    function isAlive():bool;
}