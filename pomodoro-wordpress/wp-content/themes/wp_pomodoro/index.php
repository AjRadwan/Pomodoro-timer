<?php get_header(); ?>


<div class="container-fluid timerStyle">
 <div class="row">
   <div class="col-md-12">
    <h1 class="pomo-title">Pomodoro Timer</h1>
     <span class="responsive-btn">
      <button id="pomodoroButton" class="pomodoroButton"  type="submit" onclick="onPomodoroTimer()" data-bs-placement="top" title="Pomodoro is a productivity method involving a series of short breaks during work intervals">Pomodoro</button>
      

        <button id="shortButton" class="shortButton" type="submit" onclick="onShortTimer()">Short Break</button>
        <button id="longButton" class="longButton" type="submit" onclick="onLongTimer()">Long Break</button>

        <button id="startButton" class="startButton" type="submit" onclick="onStartTimer()" data-bs-placement="top" title="Flow is Swivel’s solution that learns the way you work, the timer captures your work intervals, and when you select a break presents stimulating, restful or engaging activities.">
          Flow
        </button>
      </span>
 
   <div class="pomo-timer">
      <div class="timer-time timer-container">
        <div class="timer-time-set timer-box" id="currentTime">
          <span id="hoursValue">00</span><span>:</span><span id="minutesValue">00</span><span>:</span><span id="secondsValue">00</span>
        </div>
        <div class="timer-time-set timer-box" id="nextTime">
          <span id="hoursNext">00</span><span>:</span><span id="minutesNext">00</span><span>:</span><span id="secondsNext">00</span>
        </div>
      </div>
    </div>

   
    <button id="stopButton" class="stopButton" type="submit" onclick="onStopTimer()">
     Stop
    </button>
     <button id="restartButton" class="restartButton" type="submit" onclick="onResetTimer()">
      </span> Resetart
    </button>
   </div>
   </div>
 
  </div>

<?php get_footer(); ?>