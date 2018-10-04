@extends('layouts.app')

@section('styles')
  <style type="text/css">
    .clock {
      position: relative;
      display: flex;
      flex-flow: column wrap;
      width: 650px;
      height: 180px;
    }
    .block {
      margin-left: -1em;
      font-weight: bold;
      width: calc(100% / 12);
      height: 20%;
      color: #61676d;
      transition: 0.4s;
    }
    .block:not(:nth-child(n + 16)):nth-child(n + 11), .block:not(:nth-child(n + 46)):nth-child(n + 41) {
      margin-right: 10px;
    }
    .block:not(:nth-child(n + 31)):nth-child(n + 26) {
      margin-right: 60px;
    }
    .block:before {
      content: attr(data-num);
      position: relative;
      display: block;
      font-size: 40px;
      width: 100%;
      height: 100%;
      line-height: 20px;
      text-align: center;
    }
    .block:nth-child(-n + 10):before {
      content: "0" attr(data-num);
    }
    .block.active:before {
      color: whitesmoke;
    }
    .block.second:before {
      color: #35caed;
    }
    body {
      background: #4d5258;
    }
    .divider {
      position: absolute;
      height: 60%;
      top: 24%;
      bottom:20%;
      left: calc(45% + 14px);
    }
    .circle {
      height: 20px;
      width: 20px;
      background-color: whitesmoke;
      border-radius: 50%;
    }
    .circle:first-child {
      margin-bottom: 3.6em;
    }
    .vertical-center {
      min-height: 100%;
      min-height: 90vh;
      display: flex;
      align-items: center;
    }
  </style>
@endsection

@section('content')
  <div class="col-md-12">
    <div class="vertical-center">
      <div class="container-fluid">
        <div class="row">
          <div class="span6" style="float: none; margin: 0 auto;">
            <div class="clock">
              <div class="block" data-num="0"></div>
              <div class="block" data-num="1"></div>
              <div class="block" data-num="2"></div>
              <div class="block" data-num="3"></div>
              <div class="block" data-num="4"></div>
              <div class="block" data-num="5"></div>
              <div class="block" data-num="6"></div>
              <div class="block" data-num="7"></div>
              <div class="block" data-num="8"></div>
              <div class="block" data-num="9"></div>
              <div class="block" data-num="10"></div>
              <div class="block" data-num="11"></div>
              <div class="block" data-num="12"></div>
              <div class="block" data-num="13"></div>
              <div class="block" data-num="14"></div>
              <div class="block" data-num="15"></div>
              <div class="block" data-num="16"></div>
              <div class="block" data-num="17"></div>
              <div class="block" data-num="18"></div>
              <div class="block" data-num="19"></div>
              <div class="block" data-num="20"></div>
              <div class="block" data-num="21"></div>
              <div class="block" data-num="22"></div>
              <div class="block" data-num="23"></div>
              <div class="block" data-num="24"></div>
              <div class="block" data-num="25"></div>
              <div class="block" data-num="26"></div>
              <div class="block" data-num="27"></div>
              <div class="block" data-num="28"></div>
              <div class="block" data-num="29"></div>
              <div class="block" data-num="30"></div>
              <div class="block" data-num="31"></div>
              <div class="block" data-num="32"></div>
              <div class="block" data-num="33"></div>
              <div class="block" data-num="34"></div>
              <div class="block" data-num="35"></div>
              <div class="block" data-num="36"></div>
              <div class="block" data-num="37"></div>
              <div class="block" data-num="38"></div>
              <div class="block" data-num="39"></div>
              <div class="block" data-num="40"></div>
              <div class="block" data-num="41"></div>
              <div class="block" data-num="42"></div>
              <div class="block" data-num="43"></div>
              <div class="block" data-num="44"></div>
              <div class="block" data-num="45"></div>
              <div class="block" data-num="46"></div>
              <div class="block" data-num="47"></div>
              <div class="block" data-num="48"></div>
              <div class="block" data-num="49"></div>
              <div class="block" data-num="50"></div>
              <div class="block" data-num="51"></div>
              <div class="block" data-num="52"></div>
              <div class="block" data-num="53"></div>
              <div class="block" data-num="54"></div>
              <div class="block" data-num="55"></div>
              <div class="block" data-num="56"></div>
              <div class="block" data-num="57"></div>
              <div class="block" data-num="58"></div>
              <div class="block" data-num="59"></div>
              <div class="divider">
                <div class="circle"></div>
                <div class="circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    const numbers = [
      [1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1], // 0
      [1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1], // 1
      [1, 0, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1], // 2
      [1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1], // 3
      [1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 1], // 4
      [1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 1], // 5
      [1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 1], // 6
      [1, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0], // 7
      [1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1], // 8
      [1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1]  // 9
    ];
    const blocks = [];
    const digits = Array.from(document.querySelectorAll('.block'));
    for (let i = 0; i < 4; i++) {
      blocks.push(digits.slice( i * 15, i * 15 + 15 ));
    }
    const setNum = (block, num) => {
      let n = numbers[num];
      for (let i = 0; i < block.length; i++) {
         block[i].classList[ n[i] === 1 ?  'add' : 'remove']('active');
      }
    };
    const time = {
      s: '',
      m: '',
      h: '',
      p: null
    };
    // time loop
    const animator = () => {
      let d = new Date(),
         h = d.getHours().toString(),
         m = d.getMinutes().toString(),
         s = d.getSeconds().toString();
      s = s.length === 1 ? '0' + s : s;
      m = m.length === 1 ? '0' + m : m;
      h = h.length === 1 ? '0' + h : h;
      if (s !== time.s) {
        for (let i = 0; i < digits.length; i++) {
          let d = digits[i];
          if (i === +s) {
            d.classList.add('second');
            if (time.p !== null)
              digits[time.p].classList.remove('second');
            time.p = i;
            time.s = s;
          }
        }
      }
      if (m !== time.m) {
        setNum(blocks[2], m[0]);
        setNum(blocks[3], m[1]);
        time.m = m;
      }
      if (h !== time.h) {
        setNum(blocks[0], h[0]);
        setNum(blocks[1], h[1]);
        time.h = h;
      }
      window.requestAnimationFrame(animator)
    }
    // init
    window.requestAnimationFrame(animator)
    // toggle button
    const body = document.querySelector('body');
    changeTheme = ev => {
      body.classList.toggle('light-theme');
    };
  </script>
@endsection