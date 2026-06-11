<?php

namespace Asantibanez\LivewireCharts\Tests;

use Asantibanez\LivewireCharts\Charts\LivewireAreaChart;
use Livewire\Features\SupportTesting\Testable;
use Livewire\Livewire;

class LivewireAreaChartTest extends TestCase
{
    private function buildComponent() : Testable
    {
        return Livewire::test(LivewireAreaChart::class);
    }

    public function test_can_build_component()
    {
        //Act
        $component = $this->buildComponent();

        //Assert
        $this->assertNotNull($component);
    }
}
