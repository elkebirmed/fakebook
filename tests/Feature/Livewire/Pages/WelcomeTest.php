<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('pages.welcome');

    $component->assertSee('Fakebook');
});
