<?php

namespace Asantibanez\LivewireCharts\Tests;

use Asantibanez\LivewireCharts\Charts\LivewireTreeMapChart;
use Livewire\Features\SupportTesting\Testable;
use Livewire\Livewire;

class LivewireTreeMapChartTest extends TestCase
{
    private function buildComponent() : Testable
    {
        return Livewire::test(LivewireTreeMapChart::class);
    }

    public function test_can_build_component()
    {
        //Act
        $component = $this->buildComponent();

        //Assert
        $this->assertNotNull($component);
    }

    public function test_should_emit_event_if_present()
    {
        //Arrange
        $component = $this->buildComponent();

        $treeMapChartModel = $component->treeMapChartModel;

        data_set($treeMapChartModel, 'onBlockClickEventName', 'custom-event');

        $component->set('treeMapChartModel', $treeMapChartModel);

        //Act
        $component->runAction('onBlockClick', []);

        //Assert
        $component->assertDispatched('custom-event');
    }
}
