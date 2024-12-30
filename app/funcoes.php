<?php

function inclusoNoPlano(bool $planoPrime, int $anoLancamento) : bool {
    return $planoPrime || $anoLancamento < 2020;
}
