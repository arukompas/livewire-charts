<?php

namespace Asantibanez\LivewireCharts\Tests;

use Asantibanez\LivewireCharts\Charts\LivewireRadarChart;
use Livewire\Features\SupportTesting\Testable;
use Livewire\Livewire;

class LivewireRadarChartTest extends TestCase
{
    private function buildComponent() : Testable
    {
        return Livewire::test(LivewireRadarChart::class);
    }

    public function test_can_build_component()
    {
        //Act
        $component = $this->buildComponent();

        //Assert
        $this->assertNotNull($component);
    }
}
