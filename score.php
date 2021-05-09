<?php
      session_start();
      include 'pdo.php';
      $ques=$rows=array(
  0 => array(

'qid'=>1 ,    'ques'=>'Which war marked the rise of the glory of "He Who Must Not Be Named ?"',
    'o1'=>'First Wizarding War',
    'o2'=>'Battle of Hogwarts',
    'o3'=>'Second wizarding War',
    'o4'=>'Battle of the Tower',
    'o5'=>1
  ),
  1 => array(

'qid'=>2 ,    'ques'=>'Where was Lily and James Potter killed by "He Who Must Not Be Named ?"',
    'o1'=>'Leaking Cauldron',
    'o2'=>'The Burrow',
    'o3'=>'Godric\'s Hollow',
    'o4'=>'Hogwarts',
    'o5'=>3
  ),
  2 => array(

'qid'=>3 ,    'ques'=>'Who bit Remus Lupin which turned him into a werewolf ?',
    'o1'=>'Peter Pettigrew',
    'o2'=>'Sirius Black',
    'o3'=>'Fenrir Greyback',
    'o4'=>'Rita Skeeter',
    'o5'=>3
  ),
  3 => array(

'qid'=>4 ,    'ques'=>'Which spell was invented by Severus Snape ?',
    'o1'=>'Entrail-Expelling Curse',
    'o2'=>'Sectumsempra',
    'o3'=>'Lumos',
    'o4'=>'Crucio',
    'o5'=>2
  ),
  4 => array(

'qid'=>5 ,    'ques'=>'The duel between Albus Dumbledore and Gellert Grindelwald resulted in whose death ?',
    'o1'=>'Gellert Grindelwald',
    'o2'=>'Aberforth Dumbledore',
    'o3'=>'Ariana Dumbledore',
    'o4'=>'Salazar Slytherin',
    'o5'=>3
  ),
  5 => array(

'qid'=>6 ,    'ques'=>'What was the animagus form of James Potter ?',
    'o1'=>'Hound',
    'o2'=>'Stag',
    'o3'=>'Rat',
    'o4'=>'Wolf',
    'o5'=>2
  ),
  6 => array(

'qid'=>7 ,    'ques'=>'Who planted Whooping Willow ?',
    'o1'=>'Albus Dumbledore',
    'o2'=>'Sirius Black',
    'o3'=>'Severus Snape',
    'o4'=>'James Potter',
    'o5'=>1
  ),
  7 => array(

'qid'=>8 ,    'ques'=>'What was the name of the Black family’s house elf ?',
    'o1'=>'Dobby',
    'o2'=>'Kreacher',
    'o3'=>'Griphook',
    'o4'=>'Winky',
    'o5'=>2
  ),
  8 => array(

'qid'=>9 ,    'ques'=>'Who gifted Harry with Firebolt ?',
    'o1'=>'Albus Dumbledore',
    'o2'=>'Minerva McGonagall',
    'o3'=>'Sirius Black',
    'o4'=>'Remus Lupin',
    'o5'=>3
  ),
  9 => array(

'qid'=>10 ,    'ques'=>'Who was the owner of Elderwand before Harry Potter ?',
    'o1'=>'Sirius Black',
    'o2'=>'Draco Malfoy',
    'o3'=>'Severus Snape',
    'o4'=>'Tom Riddle',
    'o5'=>2
  ),
  10 => array(
    'qid'=>11,
    'ques'=>'Which spell did Harry used to kill Voldemort ?',
    'o1'=>'Avada Kedavra',
    'o2'=>'Sectumsempra',
    'o3'=>'Expelliarmus',
    'o4'=>'Imperius',
    'o5'=>3
  ),
  11 => array(
    'qid'=>12,
    'ques'=>'What was inside the golden snitch ?',
    'o1'=>'Sorcerer\'s stone',
    'o2'=>'Resurrection Stone',
    'o3'=>'Howler',
    'o4'=>'Put-Outer',
    'o5'=>2
  ),
  12 => array(
  'qid'=> 13,
   'ques'=> 'Who is padfoot ?',
   'o1'=> 'Serius Black',
   'o2'=> 'James Potter',
   'o3'=> 'Peter Pettigrew',
   'o4'=> 'Remus Lupin',
   'o5'=> 1
  ),
  13 => array(
    'qid'=>14,
    'ques'=>'Put-Outer possession was given to whom after Albus Dumbledore ?',
    'o1'=>'Harry Potter',
    'o2'=>'Ron Weasley',
    'o3'=>'Hermione Granger',
    'o4'=>'Luna Lovegood',
    'o5'=>2
  ),
  14 => array(
    'qid'=>15,
    'ques'=>'What was the name of the phoenix, companion of Albus Dumbledore ?',
    'o1'=>'Crookshanks',
    'o2'=>'Fawkes',
    'o3'=>'Hedwig',
    'o4'=>'Buckbeak',
    'o5'=>2
  ),
  15 => array(
    'qid'=>16,
    'ques'=>'How did Serius Black knew Scabbers was Peter Pettigrew ?',
    'o1'=>'Lost tail',
    'o2'=>'Front teeth',
    'o3'=>'Marauders Map',
    'o4'=>'Lost Toe',
    'o5'=>4
  ),
);
if(isset($_POST['submit']) && isset($_POST['name'])){
    if(strlen($_POST['name'])<1){header("Location: leaderboard.php");return;}
$s=0; 
    for ($i=1;$i<=16;$i++) {
        if(!isset($_POST['a'.$i]))continue;
        if($_POST['a'.$i]==$ques[$_POST['q'.$i]-1]['o5'])$s++;
    
    }
    


    $stmt = $pdo->prepare('Insert into leader( score,name) values(:m,:j)');
    $stmt->execute(array(
        ':m'=>$s,
        ':j'=>$_POST['name']
));
    
    header("Location: leaderboard.php");
    return;
}
?>