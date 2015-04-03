<!DOCTYPE html>

<html>
    <head>
        <title>DND: Campaign Companion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
    </head>
    <body>
	<?php include("header.php"); ?>
	
	<div class="container gray_hl main">
            <div class="row">
                <?php $segment1 = array(array("Character Name", "3",false),array("Level", "1",true)
		,array("Class", "2",false),array("Paragon Path", "2",false),array("Epic Destiny", "2",false)
		,array("Total XP", "2",true));
		for($i=0; $i<count($segment1); $i++){
                    if($segment1[$i][2]==true){
			echo '<div class=" form-group col-sm-' . $segment1[$i][1] . '">
			<input type="number"' . $segment1[$i][0] . ' class="form-control"><label class="tiny">' . $segment1[$i][0] . '</label></div>';

                    }else{
			echo '<div class=" form-group col-sm-' . $segment1[$i][1] . '">
			<input name="' . $segment1[$i][0] . '" class="form-control"><label class="tiny">' . $segment1[$i][0] . '</label></div>';
                    }
		}?>
            </div>
            <div class="row">
		<?php $segment2 = array(array("Race", "3",false),array("Size", "1",false)
		,array("Age", "1",true),array("Gender", "1",true),array("Height", "1",true)
		,array("Weight", "1",true), array("Alignment", '1',false),array("Diety", '1',false),array("Adventuring Company", '2',false));
		for($i=0; $i<count($segment2); $i++){
                    if($segment2[$i][2]==true){
			echo '<div class=" form-group col-sm-' . $segment2[$i][1] . '">
			<input type="number" name="' . $segment2[$i][1] . '" class="form-control"><label class="tiny">' . $segment2[$i][0] . '</label></div>';
                    }else{
			echo '<div class=" form-group col-sm-' . $segment2[$i][1] . '">
			<input name="' . $segment2[$i][0] . '" class="form-control"><label class="tiny">' . $segment2[$i][0] . '</label></div>';
                    }
		}?>
            </div>
	</div>
	<div class="container gray_l">
            <?php
            for($i=0; $i<3; $i++){
		echo '<div class="col-sm-4">
                      <div class="row">
                      <div class="col-sm-12 title gray">';
		if($i == 0){
                    echo '<h3> INITIATIVE </h3>';
		}else if($i == 1){
                    echo '<h3> DEFENSES</h3>';
		}else{
                    echo '<h3> MOVEMENT </h3>';
		}
		echo '</div>
                      </div>';            
        if($i == 0){
        	echo '<div class="row">';
        	$segment3 = array(array("Score", 3),array("Initiative", 3),array("DEX", 2),array("1/2Lvl", 2),array("Misc", 2));
           
			for ($j = 0; $j<5; $j++){
	                    echo '<div class="col-sm-' . $segment3[$j][1] . ' gray">
	                                <label class="tiny">' . $segment3[$j][0] . '</label>
	                                <h3 id="target-' . $segment3[$j][0] . '"></h3>
				</div>';
			} 
			echo '</div>';
			echo '<div class="row">
	                        <div class="col-sm-8">
	                            <label class="tiny"> Conditional Modifiers </label> 
					<input name="conditional-1-' . $j . '" class="form-control">
				</div>
				<div class="col-sm-4">
	                            <button class="btn btn-default space-fix"> Add </button> 
				</div>
	        </div>';
			$segment4 = array(array(array("Score", 3,false),array("STRENGTH", 3,true),array("Abil  Mod", 3,false),array("1/2 Lvl", 3,false)),
				array(array("Score", 3,false),array("CONSTITUTION", 3,true),array("Abil  Mod", 3,false),array("1/2 Lvl", 3,false)),
				array(array("Score", 3,false),array("DEXTERITY", 3,true),array("Abil  Mod", 3,false),array("1/2 Lvl", 3,false)),
				array(array("Score", 3,false),array("INTELLIGENCE", 3,true),array("Abil  Mod", 3,false),array("1/2 Lvl", 3,false)),
				array(array("Score", 3,false),array("WISDOM", 3,true),array("Abil  Mod", 3,false),array("1/2 Lvl", 3,false)),
				array(array("Score", 3,false),array("CHARISMA", 3,true),array("Abil  Mod", 3,false),array("1/2 Lvl", 3,false)));
			echo '<div class="row"><div class="col-sm-12 title gray">
				<h3> ABILITY SCORES </h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 gray">
						<p class="tiny "> Score </p>
					</div>
					<div class="col-sm-3 gray">
						<p class="tiny "> Ability </p>
					</div>
					<div class="col-sm-3 gray">
						<p class="tiny "> Abil Mod </p>
					</div>
					<div class="col-sm-3 gray">
						<p class="tiny "> Mod + 1/2 lvl </p>
					</div>
			</div>';
			for ($m=0;$m<6;$m++){
				echo '<div class="row">';
				for ($l=0;$l<4; $l++){
					if($l == 0 || $l == 1){
						if($segment4[$m][$l][2]){

							echo '<div class="col-sm-' . $segment4[$m][$l][1] . '">';
								echo '<h4 class="tiny">' . $segment4[$m][$l][0] . '</h4>
								</div>';
						}else{				
							echo '<div class="col-sm-' . $segment4[$m][$l][1] . '">';
							echo '<input type="number" name="' . $segment4[$m][$l][0] . '" class="form-control">
						</div>';
						}
					}else{
						echo '<div class="col-sm-' . $segment4[$m][$l][1] . ' gray">';
						echo   '<h3 id="target-' . $segment4[$m][$l][0] . '"></h3>
						</div>';
					}
				}
				echo '</div>';
			}
			}else if($i == 1){
			 	for ($n = 0; $n<4; $n++){
			 		$segment5 = array(array(array("Score", 2),array("AC", 3),array("armor", 1),array("lmod", 1),array("class", 1),array("feat", 1),array("ENH", 1),array("misc", 1)),
			 						array(array("Score", 2),array("FORT", 3),array("armor", 1),array("lmod", 1),array("class", 1),array("feat", 1),array("ENH", 1),array("misc", 1)),
			 						array(array("Score", 2),array("REF", 3),array("armor", 1),array("lmod", 1),array("class", 1),array("feat", 1),array("ENH", 1),array("misc", 1)),
			 						array(array("Score", 2),array("WILL", 3),array("armor", 1),array("lmod", 1),array("class", 1),array("feat", 1),array("ENH", 1),array("misc", 1)));
			 			echo '<div class="row">';
			 			for($o=0;$o<8;$o++){
	                    echo '<div class="col-sm-' . $segment5[$n][$o][1] . ' gray">
	                                <label class="tiny">' . $segment5[$n][$o][0] . '</label>
	                                <h3 id="target-' . $segment5[$n][$o][0] . '"></h3>
				  				</div>';
			}
				echo  '</div>';
				
			echo '<div class="row">
	                        <div class="col-sm-8">
	                            <label class="tiny"> Conditional Modifiers </label> 
					<input name="conditional-2-' . $n . '" class="form-control">
				</div>
				<div class="col-sm-4">
	                            <button class="btn btn-default space-fix"> Add </button> 
				</div>
	        </div>';
	    		}
			}
			echo '</div>';
		}?>
			</div>
		</div>	
    </body>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>