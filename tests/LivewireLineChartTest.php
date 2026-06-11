<?php

namespace Asantibanez\LivewireCharts\Tests;

use Asantibanez\LivewireCharts\Charts\LivewireLineChart;
use Livewire\Features\SupportTesting\Testable;
use Livewire\Livewire;

class LivewireLineChartTest extends TestCase
{
    private function buildComponent() : Testable
    {
        return Livewire::test(LivewireLineChart::class);
    }

    public function test_can_build_component()
    {
        //Act
        $component = $this->buildComponent();

        //Assert
        $this->assertNotNull($component);
    }
}
