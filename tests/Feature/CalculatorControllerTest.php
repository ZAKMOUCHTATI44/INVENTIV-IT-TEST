<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatorControllerTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $num1 = $this->faker->randomNumber(2);
        $num2 = $this->faker->randomNumber(2);

        $response = $this->post('/calculator', [
            'num1' => $num1,
            'num2' => $num2,
            'operation' => '+',
        ]);

        $response->assertStatus(200);

        $expectedResult = $num1 + $num2;
        $this->assertEquals($expectedResult, $response->viewData("result"));
    }
}
