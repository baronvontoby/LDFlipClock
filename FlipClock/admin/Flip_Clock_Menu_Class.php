<?php

class Flip_Clock_Menu_Class {
    
    public static function flipClockOptionsMenu(){
        add_menu_page(
            'Flip Clock Settings',
            'Flip Clock',
            'administrator',
            'flip_clock',
            array('Flip_Clock_Menu_Class', 'menuOptionsPage_html'),
            'dashicons-image-filter'
        );
    }

    public static function menuOptionsPage_html(){

        wp_enqueue_script('flip-clock-settings', plugins_url() . '/FlipClock/admin/js/flip-clock-settings.js', array('jquery'));
        wp_localize_script('flip-clock-settings', 'FlipClockAJAX', array('security' => wp_create_nonce( 'abc' )) );

        ?>
            <!-- <h1>Type in the date you want your flip clock to go to</h1>
            
            <form>
                <label>Day</label>
                <select id="day">
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value=10>10</option>
                    <option value=11>11</option>
                    <option value=12>12</option>
                    <option value=13>13</option>
                    <option value=14>14</option>
                    <option value=15>15</option>
                    <option value=16>16</option>
                    <option value=17>17</option>
                    <option value=18>18</option>
                    <option value=19>19</option>
                    <option value=20>20</option>
                    <option value=21>21</option>
                    <option value=22>22</option>
                    <option value=23>23</option>
                    <option value=24>24</option>
                    <option value=25>25</option>
                    <option value=26>26</option>
                    <option value=27>27</option>
                    <option value=28>28</option>
                    <option value=29>29</option>
                    <option value=30>30</option>
                    <option value=31>31</option>
                </select>
                <label>Month</label>
                <select id="month">
                    <option value=0>January</option>
                    <option value=1>February</option>
                    <option value=2>March</option>
                    <option value=3>April</option>
                    <option value=4>May</option>
                    <option value=5>June</option>
                    <option value=6>July</option>
                    <option value=7>August</option>
                    <option value=8>September</option>
                    <option value=9>October</option>
                    <option value=10>November</option>
                    <option value=11>December</option>
                </select>
                <label>Year</label>
                <select id="year">
                    <option value=2019>2019</option>
                    <option value=2020>2020</option>
                    <option value=2021>2021</option>
                    <option value=2022>2022</option>
                    <option value=2023>2023</option>
                </select>
                <label>Flip Clock ID (number)</label>
                <input id="id" value="" type="text" />
                <br>
                <input type="submit" id="set-clock" />
            </form> -->

            <h2>Tutorial</h2>
            <p> As it stands right now, all you need to do in its current state is write the following shortcode  [flip_clock] with the three following variables: </p>  
                <ul>
                    <li>day</li>
                    <li>month(#)</li>
                    <li>year</li>
                </ul>
            <p>The month goes as follows:</p>
            <ul>
                <li>January = 0</li>
                <li>February = 1</li>
                <li>March = 2</li>
                <li>April = 3</li>
                <li>May = 4</li>
                <li>June = 5</li>
                <li>July = 6</li>
                <li>August = 7</li>
                <li>September = 8</li>
                <li>October = 9</li>
                <li>November = 10</li>
                <li>December = 11</li>
            </ul>

            <h4>Currently the flip clock can only count down from 100 if you need something longer this won't work for you in its current state but you can go to my github to view the source code</h4>
            <a href="">Count Down Clock Source Code</a>

        <?php
        
    }

}
