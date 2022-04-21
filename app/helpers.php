<?php

function getMatriksGrade($id, $arr)
{
    foreach ($arr as $n) {
        if ($n->row_id == $id) {
            return $n->grade;
        }
    }
    return null;
}
function getMatriksSkor($id, $arr)
{
    foreach ($arr as $n) {
        if ($n->row_id == $id) {
            return $n->skor;
        }
    }
    return null;
}
function getMatriksBukti($id, $arr)
{
    foreach ($arr as $n) {
        if ($n->row_id == $id) {
            return $n->bukti;
        }
    }
    return false;
}
function getArrayItem($id, $arr)
{
    $x = (object) [
        "skor" => null,
        "remainingField" => 1,
    ];
    foreach ($arr as $n) {
        if ($n->t_group == $id) {
            return $n;
        }
    }
    return $x;
}
