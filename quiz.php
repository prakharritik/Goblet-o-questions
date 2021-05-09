<?php
    session_start();
$rows=array(
  0 => array(

'qid'=>1 ,    'ques'=>'Which war marked the rise of the glory of "He Who Must Not Be Named ?"',
    'o1'=>'First Wizarding War',
    'o2'=>'Battle of Hogwarts',
    'o3'=>'Second wizarding War',
    'o4'=>'Battle of the Tower',
    'o5'=>'A'
  ),
  1 => array(

'qid'=>2 ,    'ques'=>'Where was Lily and James Potter killed by "He Who Must Not Be Named ?"',
    'o1'=>'Leaking Cauldron',
    'o2'=>'The Burrow',
    'o3'=>'Godric\'s Hollow',
    'o4'=>'Hogwarts',
    'o5'=>'C'
  ),
  2 => array(

'qid'=>3 ,    'ques'=>'Who bit Remus Lupin which turned him into a werewolf ?',
    'o1'=>'Peter Pettigrew',
    'o2'=>'Sirius Black',
    'o3'=>'Fenrir Greyback',
    'o4'=>'Rita Skeeter',
    'o5'=>'C'
  ),
  3 => array(

'qid'=>4 ,    'ques'=>'Which spell was invented by Severus Snape ?',
    'o1'=>'Entrail-Expelling Curse',
    'o2'=>'Sectumsempra',
    'o3'=>'Lumos',
    'o4'=>'Crucio',
    'o5'=>'B'
  ),
  4 => array(

'qid'=>5 ,    'ques'=>'The duel between Albus Dumbledore and Gellert Grindelwald resulted in whose death ?',
    'o1'=>'Gellert Grindelwald',
    'o2'=>'Aberforth Dumbledore',
    'o3'=>'Ariana Dumbledore',
    'o4'=>'Salazar Slytherin',
    'o5'=>'C'
  ),
  5 => array(

'qid'=>6 ,    'ques'=>'What was the animagus form of James Potter ?',
    'o1'=>'Hound',
    'o2'=>'Stag',
    'o3'=>'Rat',
    'o4'=>'Wolf',
    'o5'=>'B'
  ),
  6 => array(

'qid'=>7 ,    'ques'=>'Who planted Whooping Willow ?',
    'o1'=>'Albus Dumbledore',
    'o2'=>'Sirius Black',
    'o3'=>'Severus Snape',
    'o4'=>'James Potter',
    'o5'=>'A'
  ),
  7 => array(

'qid'=>8 ,    'ques'=>'What was the name of the Black family’s house elf ?',
    'o1'=>'Dobby',
    'o2'=>'Kreacher',
    'o3'=>'Griphook',
    'o4'=>'Winky',
    'o5'=>'B'
  ),
  8 => array(

'qid'=>9 ,    'ques'=>'Who gifted Harry with Firebolt ?',
    'o1'=>'Albus Dumbledore',
    'o2'=>'Minerva McGonagall',
    'o3'=>'Sirius Black',
    'o4'=>'Remus Lupin',
    'o5'=>'C'
  ),
  9 => array(

'qid'=>10 ,    'ques'=>'Who was the owner of Elderwand before Harry Potter ?',
    'o1'=>'Sirius Black',
    'o2'=>'Draco Malfoy',
    'o3'=>'Severus Snape',
    'o4'=>'Tom Riddle',
    'o5'=>'B'
  ),
  10 => array(
    'qid'=>11,
    'ques'=>'Which spell did Harry used to kill Voldemort ?',
    'o1'=>'Avada Kedavra',
    'o2'=>'Sectumsempra',
    'o3'=>'Expelliarmus',
    'o4'=>'Imperius',
    'o5'=>'C'
  ),
  11 => array(
    'qid'=>12,
    'ques'=>'What was inside the golden snitch ?',
    'o1'=>'Sorcerer\'s stone',
    'o2'=>'Resurrection Stone',
    'o3'=>'Howler',
    'o4'=>'Put-Outer',
    'o5'=>'B'
  ),
  12 => array(
  'qid'=> 13,
   'ques'=> 'Who is padfoot ?',
   'o1'=> 'Serius Black',
   'o2'=> 'James Potter',
   'o3'=> 'Peter Pettigrew',
   'o4'=> 'Remus Lupin',
   'o5'=> 'A'
  ),
  13 => array(
    'qid'=>14,
    'ques'=>'Put-Outer possession was given to whom after Albus Dumbledore ?',
    'o1'=>'Harry Potter',
    'o2'=>'Ron Weasley',
    'o3'=>'Hermione Granger',
    'o4'=>'Luna Lovegood',
    'o5'=>'B'
  ),
  14 => array(
    'qid'=>15,
    'ques'=>'What was the name of the phoenix, companion of Albus Dumbledore ?',
    'o1'=>'Crookshanks',
    'o2'=>'Fawkes',
    'o3'=>'Hedwig',
    'o4'=>'Buckbeak',
    'o5'=>'B'
  ),
  15 => array(
    'qid'=>16,
    'ques'=>'How did Serius Black knew Scabbers was Peter Pettigrew ?',
    'o1'=>'Lost tail',
    'o2'=>'Front teeth',
    'o3'=>'Marauders Map',
    'o4'=>'Lost Toe',
    'o5'=>'D'
  ),
);
        ?>
<html>
    <head>
        <title>E-Svadhyaya/Test</title>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/minireset.css/0.0.2/minireset.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli:600'>
<style>
    h4{
        color: #111;
        font-size: 30px;
        font-weight: bolder;
    }
    .noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
}
html,
body {
  font-family: 'Muli', sans-serif;
  background-color: #272936;
  color: #A6A8B6;
}

.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-bottom: 10%; 
}

[type="radio"] {
  z-index: -1;
  position: absolute;
  opacity: 0;
}
[type="radio"]:checked ~ label {
  border-color: #4062F6;
  background-color: rgba(97, 154, 234, 0.16);
  color: #FFF;
}
[type="radio"]:checked ~ label:before {
  will-change: transform, border-width, border-color;
  -webkit-animation: bubble 1s ease-in;
          animation: bubble 1s ease-in;
}
[type="radio"]:checked ~ label:after {
  will-change: opacity, box-shadow;
  -webkit-animation: sparkles 700ms ease-in-out;
          animation: sparkles 700ms ease-in-out;
}
[type="radio"]:checked ~ label > span {
  will-change: transform;
  border: 0;
  background-image: linear-gradient(to top right, #6E89FF, #4363EE);
  -webkit-animation: radio 400ms cubic-bezier(0.17, 0.89, 0.32, 1.49);
          animation: radio 400ms cubic-bezier(0.17, 0.89, 0.32, 1.49);
}
[type="radio"]:checked ~ label > span:after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 6px;
  height: 6px;
  border-radius: 10px;
  background-color: #fff;
}
[type="radio"]:checked ~ label .card {
  will-change: box-shadow;
  -webkit-animation: card 500ms ease-in-out forwards;
          animation: card 500ms ease-in-out forwards;
}
[type="radio"]:checked ~ label .card:after {
  will-change: transform;
  -webkit-animation: shine 500ms ease-in forwards;
          animation: shine 500ms ease-in forwards;
  -webkit-animation-delay: 100ms;
          animation-delay: 100ms;
}

label {
  position: relative;
  display: grid;
  align-items: center;
  grid-template-columns: 20px auto 100px;
  grid-gap: 20px;
  width: 80vw;
  padding: 0 20px;
  border-radius: 6px;
  border: 2px solid transparent;
  background-color: transparent;
  transition: all 300ms ease-in;
}
label:hover {
  border-color: #4062F6;
  background-color: rgba(97, 154, 234, 0.16);
}
label:before, label:after {
  position: absolute;
  left: 29px;
  border-radius: 50%;
  content: '';
}
label:before {
  margin: -2rem;
  border: solid 2rem #545461;
  width: 4rem;
  height: 4rem;
  transform: scale(0);
}
label:after {
  margin: -0.1875rem;
  width: 0.375rem;
  height: 0.375rem;
  box-shadow: 0.32476rem -2.6875rem 0 -0.1875rem #ff8080, -0.32476rem -2.3125rem 0 -0.1875rem #ffed80, 2.30366rem -1.42172rem 0 -0.1875rem #ffed80, 1.6055rem -1.69573rem 0 -0.1875rem #a4ff80, 2.54785rem 0.91464rem 0 -0.1875rem #a4ff80, 2.32679rem 0.19796rem 0 -0.1875rem #80ffc8, 0.87346rem 2.56226rem 0 -0.1875rem #80ffc8, 1.29595rem 1.94258rem 0 -0.1875rem #80c8ff, -1.45866rem 2.28045rem 0 -0.1875rem #80c8ff, -0.71076rem 2.2244rem 0 -0.1875rem #a480ff, -2.69238rem 0.28141rem 0 -0.1875rem #a480ff, -2.18226rem 0.8312rem 0 -0.1875rem #ff80ed, -1.89869rem -1.92954rem 0 -0.1875rem #ff80ed, -2.01047rem -1.18791rem 0 -0.1875rem #ff8080;
}
label > span {
  position: relative;
  display: inline-flex;
  width: 20px;
  height: 20px;
  border-radius: 20px;
  border: 2px solid #454861;
  background-image: linear-gradient(to bottom, #3B4059, #1C1E2D);
}

.card {
  position: relative;
  width: 243px;
  height: 152px;
  padding: 22px 24px;
  border-radius: 16px;
  box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.25);
  background-image: linear-gradient(45deg, #FFF, #CDCDCD);
  overflow: hidden;
}
.card:before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.card:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  width: 40px;
  transform: translateX(-70px);
  background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
}
.card--blue {
  background-image: linear-gradient(45deg, #748DFB, #3859E8);
}
.card--dark {
  background-image: linear-gradient(45deg, #616161, #484848);
}
.card--sm {
  position: absolute;
  right: -76px;
  transform: scale(0.24);
}
.card__chip {
  width: 39px;
  height: 28px;
  border-radius: 7px;
  border: 1px solid rgba(102, 84, 50, 0.5);
  box-shadow: inset 1px 1px 0px rgba(179, 146, 86, 0.5);
  background-image: linear-gradient(90deg, #D0A963, #FFE6BA);
}
.card__content {
  display: flex;
  justify-content: space-between;
  margin-top: 46px;
}
.card__symbol {
  display: flex;
}
.card__symbol span {
  display: block;
  width: 30px;
  height: 30px;
  border-radius: 30px;
  background-color: #FB4646;
}
.card__symbol span:last-child {
  background-color: rgba(255, 163, 55, 0.75);
  margin-left: -13px;
}

.text__row {
  display: grid;
  grid-template-columns: 54px 64px;
  grid-gap: 6px;
}
.text__row:last-of-type {
  grid-template-columns: 45px 54px;
  margin-top: 7px;
}
.text__loader {
  height: 13px;
  border-radius: 2px;
  background-color: rgba(0, 0, 0, 0.4);
}

.option:not(:last-child) {
  margin-bottom: 4px;
}

@-webkit-keyframes radio {
  0%, 17.5% {
    transform: scale(0);
  }
}

@keyframes radio {
  0%, 17.5% {
    transform: scale(0);
  }
}
@-webkit-keyframes card {
  0% {
    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.25);
    transform: scale(0.24);
  }
  45% {
    box-shadow: 0 12px 32px 0 rgba(0, 0, 0, 0.5);
    transform: scale(0.25);
  }
  100% {
    box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.4);
    transform: scale(0.24);
  }
}
@keyframes card {
  0% {
    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.25);
    transform: scale(0.24);
  }
  45% {
    box-shadow: 0 12px 32px 0 rgba(0, 0, 0, 0.5);
    transform: scale(0.25);
  }
  100% {
    box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.4);
    transform: scale(0.24);
  }
}
@-webkit-keyframes shine {
  from {
    transform: translateX(-70px) rotate(10deg);
  }
  to {
    transform: translateX(300px) rotate(10deg);
  }
}
@keyframes shine {
  from {
    transform: translateX(-70px) rotate(10deg);
  }
  to {
    transform: translateX(300px) rotate(10deg);
  }
}
@-webkit-keyframes bubble {
  15% {
    transform: scale(1);
    border-color: #545461;
    border-width: 2rem;
  }
  30%, 100% {
    transform: scale(1);
    border-color: #545461;
    border-width: 0;
  }
}
@keyframes bubble {
  15% {
    transform: scale(1);
    border-color: #545461;
    border-width: 2rem;
  }
  30%, 100% {
    transform: scale(1);
    border-color: #545461;
    border-width: 0;
  }
}
@-webkit-keyframes sparkles {
  0%, 10% {
    opacity: 0;
    transform: scale(0);
  }
  15% {
    opacity: 1;
    transform: scale(1.2) rotate(-20deg);
    box-shadow: 0.32476rem -2.1875rem 0 0rem #ff8080, -0.32476rem -1.8125rem 0 0rem #ffed80, 1.91274rem -1.10998rem 0 0rem #ffed80, 1.21459rem -1.38398rem 0 0rem #a4ff80, 2.06039rem 0.80338rem 0 0rem #a4ff80, 1.83932rem 0.0867rem 0 0rem #80ffc8, 0.65652rem 2.11178rem 0 0rem #80ffc8, 1.07901rem 1.4921rem 0 0rem #80c8ff, -1.24172rem 1.82996rem 0 0rem #80c8ff, -0.49382rem 1.77391rem 0 0rem #a480ff, -2.20492rem 0.17015rem 0 0rem #a480ff, -1.69479rem 0.71994rem 0 0rem #ff80ed, -1.50777rem -1.61779rem 0 0rem #ff80ed, -1.61955rem -0.87617rem 0 0rem #ff8080;
  }
}
@keyframes sparkles {
  0%, 10% {
    opacity: 0;
    transform: scale(0);
  }
  15% {
    opacity: 1;
    transform: scale(1.2) rotate(-20deg);
    box-shadow: 0.32476rem -2.1875rem 0 0rem #ff8080, -0.32476rem -1.8125rem 0 0rem #ffed80, 1.91274rem -1.10998rem 0 0rem #ffed80, 1.21459rem -1.38398rem 0 0rem #a4ff80, 2.06039rem 0.80338rem 0 0rem #a4ff80, 1.83932rem 0.0867rem 0 0rem #80ffc8, 0.65652rem 2.11178rem 0 0rem #80ffc8, 1.07901rem 1.4921rem 0 0rem #80c8ff, -1.24172rem 1.82996rem 0 0rem #80c8ff, -0.49382rem 1.77391rem 0 0rem #a480ff, -2.20492rem 0.17015rem 0 0rem #a480ff, -1.69479rem 0.71994rem 0 0rem #ff80ed, -1.50777rem -1.61779rem 0 0rem #ff80ed, -1.61955rem -0.87617rem 0 0rem #ff8080;
  }
}
</style>
</head>

<body class="noselect">
    <div id='timer' style="position: fixed;margin: auto;"></div>
    <div class="container mt-5">
        

                <div class="question bg-white p-3 border-bottom mb-5">
                    <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        <h4 >Quiz</h4>
                    </div>
                </div>
            <form method="post" action="score.php">
              <input type="hidden" name="time" id="input" value="">
              <h6 class="mt-1 ml-2 mr-5" style="font-size:24px;font-weight:bold;margin-bottom:10px;display: inline-block;">Name:</h5> <input type="text" class="mb-5" name="name" id="input" value="" required>
                <?php
                $c=0;
                foreach ($rows as $key) {
                    ++$c;
                echo'<div class="container">
                <h5 class="mt-1 ml-2" style="font-size:24px;font-weight:bold;margin-bottom:10px;">'.$key['ques'].'</h5>
                <input type="hidden" name="q'.$c.'" value="'.$key['qid'].'">';
                echo'
  <div class="option">
    <input type="radio" name="a'.$c.'" id="a'.$c.'1" value="1">
    <label for="a'.$c.'1" aria-label="Silver">
      <span></span>
      
      '.$key['o1'].'
      
    </label>
  </div>
    <div class="option">
    <input type="radio" name="a'.$c.'" id="a'.$c.'2" value="2">
    <label for="a'.$c.'2" aria-label="Silver2">
      <span></span>
      
      '.$key['o2'].'
      
    </label>
  </div>
  <div class="option">
    <input type="radio" name="a'.$c.'" id="a'.$c.'3" value="3">
    <label for="a'.$c.'3" aria-label="Royal blue">
      <span></span>
      
      '.$key['o3'].'
      
    </label>
  </div>
  
  <div class="option">
    <input type="radio" name="a'.$c.'" id="a'.$c.'4" value="4">
    <label for="a'.$c.'4" aria-label="Dark grey">
      <span></span>
      
      '.$key['o4'].'
      
    </label>
  </div>
</div>
';
                }

                ?>
<input class="btn btn-primary border-success align-items-center btn-success m-auto d-block" type="submit" name="submit" value="Submit">
            </form>

 
</div>
<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
   var c=0;
   document.addEventListener('visibilitychange', function(){
   document.title = document.visibilityState;
   if(document.visibilityState=='hidden'){sessionStorage.clear();
    window.location.assign('index.php');
   }
  
});
   if (sessionStorage.getItem("counter")) {

        var value = sessionStorage.getItem("counter");
      }
else {
      var value = 0;
    }
    const timeSpan = document.getElementById('timer');

const mins = 3.34;
const now = new Date().getTime();
if(value!=0)
value=mins * 60 * 1000 -value;
const deadline = mins * 60 * 1000 + now - value;


setInterval(() => {
  var currentTime = new Date().getTime();
  var distance = deadline - currentTime;
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  value= minutes * 60 * 1000 + seconds * 1000;
sessionStorage.setItem("counter", value);
$('#input').val(Math.trunc((mins * 60 * 1000-value)/1000)); 
  timeSpan.innerHTML = minutes + 'min ' + seconds + 'seconds';
  if(minutes<=0 && seconds<=0){sessionStorage.clear();
    window.location.assign('index.php');
  }
}, 500)

        $(document).keydown(function (event) {
            if (event.keyCode == 123) {
                return false;
            }
            else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
                return false;
            }
        });

</script>
</body>
</html>