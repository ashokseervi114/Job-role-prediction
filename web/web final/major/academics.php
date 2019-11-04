<div class="academic-detail-container" id="academic-detail-box">
	<div class="form-header">
		<div class="form-text">Academic's Detail :-</div>
		<div class="edit-update-btn">
			<a href="academics-edit.php?username=<?php echo $u->username; ?>#academic-detail-box" class="btn btn-default">Edit <span></span></a>
		</div>
	</div>
	<div class="form-container">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="operatingSystem">Academic Percentage in Operating System</label>
					<input type="number" readonly class="form-control" id="operatingSystem" placeholder="" value="<?php echo $ad->operating_system; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="linuxAd">Academic Percentage in Linux Administration</label>
					<input type="number" readonly class="form-control" id="linuxAd" placeholder="" value="<?php echo $ad->linux_administration; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="javaBeginner">Academic Percentage in Java Programming</label>
					<input type="number" readonly class="form-control" id="linux-ad" placeholder="" value="<?php echo $ad->java; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="cpp">Academic Percentage in C++</label>
					<input type="number" readonly class="form-control" id="cpp" placeholder="" value="<?php echo $ad->cpp; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="progInC">Academic Percentage in C</label>
					<input type="number" readonly class="form-control" id="progInC" placeholder="" value="<?php echo $ad->c; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="python">Academic Percentage in Python</label>
					<input type="number" readonly class="form-control" id="python" placeholder="" value="<?php echo $ad->python; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="python">Academic Percentage in Web Programming</label>
					<input type="number" readonly class="form-control" id="python" placeholder="" value="<?php echo $ad->web_programming; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="python">Academic Percentage in Network</label>
					<input type="number" readonly class="form-control" id="python" placeholder="" value="<?php echo $ad->network; ?>">
				</div>

			</div>
		</form>
	</div>
</div>


<div class="acadpertdetails" id="acadPer-details-box">
	<div class="form-header">
		<div class="form-text bg-01">Academic Percentage :- </div>

		<div class="edit-update-btn">
			<a href="acadPer-edit.php?username=<?php echo $u->username; ?>#acadPer-details-box" class="btn btn-default">Edit <span></span></a>
		</div>

	</div>
	<div class="form-container">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="operatingSystem">Academic Percentage in Operating System</label>
					<input type="number" readonly class="form-control" id="operatingSystem" placeholder="" name="operatingSystem" value="<?php echo $ad->operating_system_per; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="algorithm">Academic Percentage in Algorithm</label>
					<input type="number" readonly class="form-control" id="algorithm" placeholder="" value="<?php echo $ad->algorithm_per; ?>" name="algorithm">
				</div>
				<div class="form-group col-md-6">
					<label for="progConcept">Academic Percentage in Programming Concept</label>
					<input type="number" readonly class="form-control" id="progConcept" placeholder="" value="<?php echo $ad->programming_concept_per; ?>" name="progConcept">
				</div>
				<div class="form-group col-md-6">
					<label for="softEngineering">Academic Percentage Software Engineering</label>
					<input type="number" readonly name="softEngineering" class="form-control" id="softEngineering" placeholder="" value="<?php echo $ad->software_eng_per; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="comNetwork">Academic Percentage in Computer Network</label>
					<input type="number" readonly name="comNetwork" class="form-control" id="comNetwork" placeholder="" value="<?php echo $ad->computer_net_per; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="electSub">Academic Percentage in Electronics Subject</label>
					<input type="number" readonly name="electSub" class="form-control" id="electSub" placeholder="" value="<?php echo $ad->electronics_per; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="compArch">Academic Percentage in Computer Architecture</label>
					<input type="number" readonly name="compArch" class="form-control" id="compArch" placeholder="" value="<?php echo $ad->computer_arch_per; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="maths">Academic Percentage in Mathematics</label>
					<input type="number" readonly name="maths" class="form-control" id="maths" placeholder="" value="<?php echo $ad->mathematics_per; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="commSkill">Academic Percentage in Communication Skills</label>
					<input type="number" readonly name="commSkill" class="form-control" id="commSkill" placeholder="" value="<?php echo (isset($ad->communication_per) ? $ad->communication_per : "" ) ?>">
				</div>
			</div>
		</form>
	</div>
</div>


<div class="probSkilldetails" id="problem-details-box">
	<div class="form-header">
		<div class="form-text bg-01">Problem Solving Skills :- </div>

		<div class="edit-update-btn">
			<a href="probSkills-update.php?username=<?php echo $u->username; ?>#problem-details-box" class="btn btn-default">Edit <span></span></a>
		</div>

	</div>
	<div class="form-container">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="operatingSystem">Logical quotient rating</label>
					<input type="number" readonly class="form-control" id="operatingSystem" placeholder="" value="<?php echo (isset($prbd->logical_quo_rates) ? $prbd->logical_quo_rates : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="algorithm">Hackathon's rating</label>
					<input type="text" class="form-control" readonly value="<?php echo (isset($prbd->hackathons_rates) ? $prbd->hackathons_rates : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="algorithm">Coding skills rating</label>
					<input type="text" class="form-control" readonly value="<?php echo (isset($prbd->code_skill_rates) ? $prbd->code_skill_rates : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="algorithm">Talent test ratings</label>
					<input type="text" class="form-control" readonly value="<?php echo (isset($prbd->talent_test_rates) ? $prbd->talent_test_rates : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="algorithm">Memory capabilties rating</label>
					<input type="text" class="form-control" readonly value="<?php echo (isset($prbd->memory_capability_rates) ? $prbd->memory_capability_rates : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="algorithm">Olympiads rating</label>
					<input type="text" class="form-control" readonly value="<?php echo (isset($prbd->olympiads_rates) ? $prbd->olympiads_rates : "" ) ?>">
				</div>
			</div>
		</form>
	</div>

</div>

<div class="knowSkilldetails" id="know-details-box">
	<div class="form-header">
		<div class="form-text bg-01">Knowledge Skills :- </div>

		<div class="edit-update-btn">
			<a href="knldgSkills-update.php?username=<?php echo $u->username; ?>#know-details-box" class="btn btn-default">Edit <span></span></a>
		</div>

	</div>
	<div class="form-container">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="courseTaken">Online(Extra) Courses Taken</label>
					<input type="number" name="courseTaken" readonly class="form-control" id="operatingSystem" placeholder="" value="<?php echo (isset($knd->extra_course) ? $knd->extra_course : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="certification">Certifications</label>
					<input type="number" name="certification" readonly class="form-control" value="<?php echo (isset($knd->certifications) ? $knd->certifications : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="workshop">Workshop's Attended</label>
					<input type="number" name="workshop" readonly class="form-control" value="<?php echo (isset($knd->workshops) ? $knd->workshops : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="interestedSub">Interested Subject's</label>
					<input type="number" name="interestedSub" readonly class="form-control" value="<?php echo (isset($knd->intersted_subject) ? $knd->intersted_subject : "" ) ?>">
				</div>
			</div>
		</form>
	</div>

</div>


<div class="commskilldetails" id="comm-details-box">
	<div class="form-header">
		<div class="form-text bg-01">Communication Skills :- </div>

		<div class="edit-update-btn">
			<a href="commSkills-update.php?username=<?php echo $u->username; ?>#comm-details-box" class="btn btn-default">Edit <span></span></a>
		</div>

	</div>
	<div class="form-container">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="publicSpeaking">Public Speaking Skills</label>
					<input type="text" name="publicSpeaking" readonly class="form-control" id="operatingSystem" placeholder="" value="<?php echo (isset($cmmd->public_speaking) ? $cmmd->public_speaking : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="readWrite">Read and Writing Skills</label>
					<input type="text" name="readWrite" class="form-control" readonly value="<?php echo (isset($cmmd->reading_and_writing_skill) ? $cmmd->reading_and_writing_skill : "" ) ?>">
				</div>
			</div>
		</form>
	</div>

</div>

<div class="commskilldetails" id="team-details-box">
	<div class="form-header">
		<div class="form-text bg-01">Teamwork Skills :- </div>

		<div class="edit-update-btn">
			<a href="teamwork-update.php?username=<?php echo $u->username; ?>#team-details-box" class="btn btn-default">Edit <span></span></a>
		</div>

	</div>
	<div class="form-container">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="elderInput">What seniors or elders says</label>
					<input type="text" name="elderInput" readonly class="form-control" id="operatingSystem" placeholder="" value="<?php echo (isset($tmd->senior_older_input) ? $tmd->senior_older_input : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="gamesInput">Interest in games</label>
					<input type="text" name="gamesInput" class="form-control" readonly value="<?php echo (isset($tmd->interested_in_games) ? $tmd->interested_in_games : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="behaviourIn">Type of behaviour</label>
					<input type="text" name="behaviourIn" class="form-control" readonly value="<?php echo (isset($tmd->behaviour_input) ? $tmd->behaviour_input : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="skillIn">Skill Type </label>
					<input type="text" name="skillIn" class="form-control" readonly value="<?php echo (isset($tmd->management_tech_input) ? $tmd->management_tech_input : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="hardworkIn">Harworking capabilities</label>
					<input type="text" name="hardworkIn" class="form-control" readonly value="<?php echo (isset($tmd->hard_smart_worker) ? $tmd->hard_smart_worker : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="teamworkIn">Teamwork Project, If any</label>
					<input type="text" name="teamworkIn" class="form-control" readonly value="<?php echo (isset($tmd->worked_as_team) ? $tmd->worked_as_team : "" ) ?>">
				</div>
			</div>
		</form>
	</div>

</div>

<div class="commskilldetails" id="self-details-box">
	<div class="form-header">
		<div class="form-text bg-01">Self Managemnet :- </div>

		<div class="edit-update-btn">
			<a href="selfmanage-update.php?username=<?php echo $u->username; ?>#self-details-box" class="btn btn-default">Edit <span></span></a>
		</div>

	</div>
	<div class="form-container">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="sysWork">Worked on system, How much longer</label>
					<input type="number" name="sysWork" readonly class="form-control" id="sysWork" placeholder="" value="<?php echo (isset($sld->longer_work_OnSystem) ? $sld->longer_work_OnSystem : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="slfLearn">Self learning or self taught capabilities</label>
					<input type="text" name="slfLearn" class="form-control" readonly value="<?php echo (isset($sld->self_learning_capabilities) ? $sld->self_learning_capabilities : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="bookInst">Books Interest, If yes What type</label>
					<input type="text" name="bookInst" class="form-control" readonly value="<?php echo (isset($sld->books_interest) ? $sld->books_interest : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="relStatus">Relationship Status</label>
					<input type="text" name="relStatus" class="form-control" readonly value="<?php echo (isset($sld->relationship_status) ? $sld->relationship_status : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="jobStatus">Job Status</label>
					<input type="text" name="jobStatus" class="form-control" readonly value="<?php echo (isset($sld->salary_status) ? $sld->salary_status : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="introvert">Are you an introvert?</label>
					<input type="text" name="introvert" class="form-control" readonly value="<?php echo (isset($sld->introvert_status) ? $sld->introvert_status : "" ) ?>">
				</div>
			</div>
		</form>
	</div>

</div>

<div class="commskilldetails" id="int-details-box">
	<div class="form-header">
		<div class="form-text bg-01">Interest :- </div>

		<div class="edit-update-btn">
			<a href="interest-update.php?username=<?php echo $u->username; ?>#int-details-box" class="btn btn-default">Edit <span></span></a>
		</div>

	</div>
	<div class="form-container">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="careerPref">What type of career area you prefer</label>
					<input type="text" name="careerPref" readonly class="form-control" id="operatingSystem" placeholder="" value="<?php echo (isset($ind->interest_career_area) ? $ind->interest_career_area : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="nextStep">Job or Higher Studies</label>
					<input type="text" name="nextStep" class="form-control" readonly value="<?php echo (isset($ind->job_higherStudies) ? $ind->job_higherStudies : "" ) ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="typeComp">What type of industry or company you prefer</label>
					<input type="text" name="typeComp" class="form-control" readonly value="<?php echo (isset($ind->company_interest) ? $ind->company_interest : "" ) ?>">
				</div>
			</div>
		</form>
	</div>

</div>
