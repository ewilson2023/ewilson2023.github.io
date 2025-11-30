<?php
/** Used in quiz_result. Associative Array that stores groups of 
 * emotion names as a string, normalized by alphabetical order.
 * 
 */
$EMOTION_RECIPES_DATA = [
	'Amused, Bored'			=>	'Neutral',
	'Bored, Peaceful'		=>	'Neutral',
	
	'Uncomfortable, Neutral'	=>	'Bored',
	'Peaceful +Uncomfortable'	=>	'Bored',
	'Content, Neglected'	=>	'Peaceful',
	'Happy, Neutral'		=>	'Content',
	'Content, Neutral'		=>	'Satisfied',

	'Peaceful, Tense'		=>	'Relief',
	'Content, Jealous'		=>	'Relief',
	'Hurt, Peaceful'		=>	'Relief',
	'Content, Hurt'			=>	'Relief',
	'Happy, Hurt'			=>	'Relief',
	'Happy, Jealous'		=>	'Relief',

	'Excited, Love'			=>	'Passion',
	'Excited, Optimistic'	=>	'Passion',

	'Desire, Lonely'		=>	'Longing',
	'Desire, Sad'			=>	'Longing',
	'Desire, Neglected'		=>	'Longing',
	'Love, Neglected'		=>	'Longing',
	'Lonely, Love'			=>	'Longing',

	'Empathy, Sad'			=>	'Pity',
	'Empathy, Tense'		=>	'Pity',

	'Love, Passion'			=>	'Infatuated',
	'Desire, Love'			=>	'Attraction',

	'Nostalgic, Regret'		=>	'Wistful',
	'Nostalgic, Peaceful'	=>	'Wistful',
	'Nostalgic, Sad'		=>	'Wistful',
	'Love, Nostalgic'		=>	'Wistful',

	'Curious, Passion'		=>	'Enthralled',
	'Curious, Love'			=>	'Enthralled',

	'Optimistic, Suspense'	=>	'Excited',

	'Optimistic, Passion'	=>	'Joy',
	'Happy, Passion'		=>	'Joy',
	'Excited, Happy'		=>	'Joy',

	'Excited, Surprised'	=>	'Delight',
	'Amused, Surprised'		=>	'Delight',

	'Happy, Peaceful'		=>	'Bliss',

	'Happy, Proud'			=>	'Confident',
	'Optimistic, Proud'		=>	'Confident',

	'Confident, Empathy'	=>	'Proud',
	'Empathy, Happy'		=>	'Proud',

	'Happy, Suspense'		=>	'Optimistic',

	'Confident, Optimistic'	=>	'Eager',

	'Confidence, Suspense'	=>	'Hope',
/* 	'Optimistic, Suspense'	=>	'Hope', */

	'Proud, Surprised'		=>	'Impressed',

	'Angry, Neutral'		=>	'Annoyed',
	'Angry, Peaceful'		=>	'Annoyed',

	'Neutral, Rage'			=>	'Irritable',
	'Angry, Frustrated'		=>	'Irritable',
	'Annoyed, Frustrated'	=>	'Irritable',
	'Distress, Frustrated, Rage'	=>	'Irritable',

	'Desire, Jealous'		=>	'Envy',
	'Angry, Desire'			=>	'Envy',

	'Angry, Hurt'			=>	'Bitter',
	'Amused, Angry'			=>	'Bitter',

	'Angry, Distressed'		=>	'Rage',
	'Angry, Tense'			=>	'Rage',

	'Anxious, Love, Neglected'	=>	'Jealous',
	'Love, Neglected, Tense'	=>	'Jealous',
	'Desire, Neglected, Tense'	=>	'Jealous',
	'Anxious, Desire, Neglected'	=>	'Jealous',

	'Angry, Defeated'		=>	'Frustrated',
	'Angry, Disappointed'	=>	'Frustrated',

	'Angry, Nostalgic'		=>	'Resentment',

	'Angry, Scared'			=>	'Agitated',
	'Annoyed, Excited'		=>	'Agitated',

	'Angry, Happy'			=>	'Hysterical',
	'Amused, Passion'		=>	'Hysterical',
	'Distressed, Happy'		=>	'Hysterical',

	'Embarrassed, Regret'	=>	'Guilt',
	'Empathy, Regret'		=>	'Guilt',

	'Empathy, Guilt'		=>	'Regret',
	'Empathy, Guilt, Nostalgic'		=>	'Regret',
	'Guilt, Nostalgic'		=>	'Regret',

	'Embarrassed, Rage'		=>	'Humiliated',
	'Angry, Embarrased'		=>	'Humiliated',

	'Embarrased, Scared'	=>	'Mortified',
	'Embarrased, Shock'		=>	'Mortified',
	'Embarrassed, Empathy'	=>	'Mortified',

	'Disgusted, Surprised'	=>	'Revulsion',
	'Disgusted, Scared'		=>	'Revulsion',
	'Disgusted, Distressed'	=>	'Revulsion',

	'Angry, Disgusted'		=>	'Loathing',
	'Disgusted, Passion'	=>	'Loathing',
	'Angry, Passion'		=>	'Loathing',
	'Passion, Rage'			=>	'Loathing',
	'Love, Rage'			=>	'Loathing',

	'Amused, Disgusted'		=>	'Macabre Fascination',
	'Disgusted, Happy'		=>	'Macabre Fascination',
	'Disgusted, Excited'	=>	'Macabre Fascination',
	'Desire, Disgusted'		=>	'Macabre Fascination',
	'Curious, Disgusted'	=>	'Macabre Fascination',

	'Jealous, Surprised'	=>	'Hurt',
	'Hurt, Scared'			=>	'Distressed',
	
	'Anxious, Love'			=>	'Insecure',
	'Hurt, Neglected'		=>	'Insecure',
	'Embarrassed, Lonely'	=>	'Insecure',

	'Embarrassed, Neglected'	=>	'Rejected',
	'Desire, Disappointed, Hurt'	=>	'Rejected',
	'Embarrassed, Hurt, Lonely'	=>	'Rejected',
	'Desire, Disappointed'		=>	'Rejected',
	'Disappointed, Lonely'		=>	'Rejected',
	'Hurt, Lonely'				=>	'Rejected',

	'Sad, Surprised'		=>	'Disappointed',

	'Disappointed, Passion'		=>	'Defeated',
	'Confident, Disappointed'	=>	'Defeated',
	'Confident, Sad'			=>	'Defeated',
	'Disappointed, Optimistic'	=>	'Defeated',
	'Optimistic, Sad'			=>	'Defeated',

	'Distressed, Sad'			=>	'Miserable',

	'Indifferent, Sad'		=>	'Unhappy',
	'Content, Sad'			=>	'Unhappy',
	'Bored, Sad'			=>	'Unhappy',

	'Distressed, Neglected'	=>	'Grief',
	'Lonely, Sad'			=>	'Grief',
	'Love, Sad'				=>	'Grief',

	'Defeated, Sad'			=>	'Depressed',
	'Distress, Indifferent'	=>	'Depressed',

	'Neglected, Sad'		=>	'Lonely',

	'Distressed, Lonely'	=>	'Isolated',
	'Defeated, Lonely'		=>	'Isolated',

	'Anxious, Nostalgic'		=>	'Homesick',
	'Nostalgic, Uncomfortable'	=>	'Homesick',
	'Lonely, Nostalgic'		=>	'Homesick',
	'Lonely, Regret'		=>	'Homesick',

	'Scared, Tense'			=>	'Anxious',
	'Anxious, Tense'		=>	'Suspense',

	'Distressed, Scared'	=>	'Panic',

	'Anxious, Suspense'		=>	'Dread',
	'Scared, Suspense'		=>	'Dread',
	'Love, Scared'			=>	'Protective',

	'Curious, Uncomfortable'	=>	'Confused',
	'Curious, Defeated'		=>	'Confused',
	'Curious, Tense'		=>	'Confused',

	'Happy, Surprised'		=>	'Amazed',
	'Scared, Surprised'		=>	'Alarmed',

	'Surprised, Uncomfortable'	=>	'Dismayed',
	'Disappointed, Surprised'	=>	'Dismayed',

	'Curious, Desire'		=>	'Fascinated',
	'Curious, Excited'		=>	'Fascinated',

	'Surprised, Suspense'	=>	'Shock',
	'Distressed, Surprised'	=>	'Shock',

	'Anxious, Tired'		=>	'Uneasy',
	'Anxious, Peaceful'		=>	'Uneasy',
	'Content, Tense'		=>	'Uneasy',
	'Uncomfortable, Scared'	=>	'Uneasy',
	'Anxious, Neutral'		=>	'Uneasy',
	'Anxious, Uncomfortable'	=>	'Uneasy',
	
/////////////// ORGANIZE LATER //////////////////
	
	'Happy, Love'			=>	'Bliss',		/* 	Bliss/Affection/??? */
	
	'Excited, Neutral'		=>	'Content',
	'Angry, Content'		=>	'Annoyed',
	
	'Bored, Desire, Sad'	=>	'Something Missing',
	'Bored, Desire'			=>	'Something Missing',
	'Desire, Neutral'		=>	'Something Missing',
	'Desire, Neutral, Sad'	=>	'Something Missing',
	
	'Distressed, Proud'		=>	'Torn',		/*  Torn/Ambivalent/Conflicted */
	'Defeated, Empathy'		=>	'Torn',		/* 	Torn? Disappointed? Let Down? */
	
	'Angry, Bored'			=>	'Restless',
	'Annoyed, Bored'		=>	'Restless',
	
	/* Annoyed, Content/Neutral/'Peaceful'	=>	??? */
	'Confused, Love'	=>	'Curious',		 /* Curious/Fascinated? */
	/* 'Love, Scared'		=>	???? */
	
	'Annoyed, Passion'	=>	'Angry',
	
	'Disgusted, Love'	=>	'Macabre Fascination',
	'Angry, Surprised'	=>	'Dismayed',
	
	'Angry, Sad'		=>	'Resentment',	/* Bitter/Grief/Resentment */
	'Angry, Love'		=>	'Passionate',
	'Happy, Sad'		=>	'Bittersweet',
	
	'Confident, Scared'		=>	'Brave',
	'Anxious, Confident'	=>	'Brave',
	
	'Happy, Scared'			=>	'Optimistic',
	'Happy, Anxious'	=>	'Optimistic', /* Anticipation?/Hope?/Optimistic */
	
	'Love, Surprised'	=>	'Delighted',
	
	'Neutral, Surprised'	=>	'Unimpressed',	
	'Neutral, Curious'	=>	'Unimpressed',	
	'Bored, Curious'		=>	'Unimpressed',	
	'Bored, Surprised'	=>	'Unimpressed',	
	
	'Content, Surprised'	=>	'Pleased',
	'Peaceful, Surprised'	=>	'Pleased',
	
	'Disgusted, Sad'	=>	'Let Down',			/* Disappointed/Let Down */
	'Sad, Scared'	=>	'Pathetic', 	/* Distress?/Malaise?/Pessimistic?/Depressed Uneasy?/Pathetic?/Miserable? */
	
	'Neutral, Sad'		=>	'Unhappy',			/*  Blue?/Gloomy?)/Unhappy? */
	
	'Hurt, Love'		=>	'Heartache',
	'Defeated, Love'	=>	'Heartache',	/* Heartbroken/Rejected */
	'Distressed, Love'	=>	'Heartache',
	
	'Distressed, Hurt'		=>	'Torment',			/* Agony/Anguish/Torment */
	'Distressed, Passion'	=>	'Torment',			/* Agony/Anguish/Torment */
	
	'Passion, Uncomfortable'	=>	'Distress',
	

	'Regret, Suspense'			=>	'Dread',
	'Distress, Suspense'		=>	'Dread',
	'Uncomfortable, Suspense'	=>	'Dread',
	'Tense, Suspense'			=>	'Dread',
	'Guilt, Suspense'			=>	'Dread',
	
	'Anxious, Curious'		=>	'Bewildered', 	/* Confounded/Bewildered, */
	'Anxious, Confused'		=>	'Bewildered', 	/* Confounded/Bewildered, */
	'Confused, Tired'		=>	'Bewildered', 	/* Confounded/Bewildered, */
	'Curious, Tired'		=>	'Bewildered', 	/* Confounded/Bewildered, */
	
	/* 'Curious, Tired'		=>	'Confused', */
	
	'Anger, Distress, Guilt' 			=>	'Self-Loathing',
	'Anger, Distress, Embarrassed'		=>	'Self-Loathing',
	'Anger, Distress, Regret'			=>	'Self-Loathing',
	'Disgust, Distress, Guilt' 			=>	'Self-Loathing',
	'Disgust, Distress, Embarrassed' 	=>	'Self-Loathing',
	'Disgust, Distress, Regret' 		=>	'Self-Loathing',
	'Anger, Guilt, Passion' 			=>	'Self-Loathing',
	'Anger, Embarrassed, Passion' 		=>	'Self-Loathing',
	'Anger, Passion, Regret' 			=>	'Self-Loathing',
	'Disgust, Guilt, Passion' 			=>	'Self-Loathing',
	'Disgust, Embarrassed, Passion' 	=>	'Self-Loathing',
	'Disgust, Passion, Regret' 			=>	'Self-Loathing',
	
	'Angry, Disgusted, Neutral'	=>	'Done',
	'Angry, Disgusted, Tired'	=>	'Done',
	'Angry, Bored, Disgusted'	=>	'Done',
	'Angry, Hurt, Neutral'		=>	'Done',
	'Angry, Hurt, Tired'		=>	'Done',
	'Angry, Bored, Hurt'		=>	'Done',
	'Angry, Distressed, Neutral'	=>	'Done',
	'Angry, Distressed, Tired'		=>	'Done',
	'Angry, Bored, Distressed'		=>	'Done',

	'Disgusted, Embarrassed, Neutral'	=>	'Done',
	'Disgusted, Embarrassed, Tired'		=>	'Done',
	'Disgusted, Embarrassed, Bored'		=>	'Done',
	'Embarrassed, Hurt, Neutral'		=>	'Done',
	'Embarrassed, Hurt, Tired'			=>	'Done',
	'Bored, Embarrassed, Hurt'			=>	'Done',
	'Distressed, Embarrassed, Neutral'	=>	'Done',
	'Distressed, Embarrassed, Tired'	=>	'Done',
	'Bored, Distressed, Embarrassed'	=>	'Done',

	'Defeated, Disgusted, Neutral'	=>	'Done',
	'Defeated, Disgusted, Tired'	=>	'Done',
	'Bored, Defeated, Disgusted'	=>	'Done',
	'Defeated, Hurt, Neutral'		=>	'Done',
	'Defeated, Hurt, Tired'			=>	'Done',
	'Bored, Defeated, Hurt'			=>	'Done',
	'Defeated, Distressed, Neutral'	=>	'Done',
	'Defeated, Distressed, Tired'	=>	'Done',
	'Bored, Defeated, Distressed'	=>	'Done',

	'Disgusted, Hurt, Neutral'	=>	'Done',
	'Disgusted, Hurt, Tired'	=>	'Done',
	'Bored, Disgusted, Hurt'	=>	'Done',
	'Hurt, Neutral'				=>	'Done',
	'Hurt, Tired'				=>	'Done',
	'Bored, Hurt'				=>	'Done',
	'Distressed, Hurt, Neutral'	=>	'Done',
	'Distressed, Hurt, Tired'	=>	'Done',
	'Bored, Distressed, Hurt'	=>	'Done',

	'Disgusted, Jealous, Neutral'	=>	'Done',
	'Disgusted, Jealous, Tired'		=>	'Done',
	'Bored, Disgusted, Jealous'		=>	'Done',
	'Hurt, Jealous, Neutral'		=>	'Done',
	'Hurt, Jealous, Tired'			=>	'Done',
	'Bored, Hurt, Jealous'			=>	'Done',
	'Distressed, Jealous, Neutral'	=>	'Done',
	'Distressed, Jealous, Tired'	=>	'Done',
	'Bored, Distressed, Jealous'	=>	'Done',

	'Disappointed, Disgusted, Neutral'	=>	'Done',
	'Disappointed, Disgusted, Tired'	=>	'Done',
	'Bored, Disappointed, Disgusted'	=>	'Done',
	'Disappointed, Hurt, Neutral'		=>	'Done',
	'Disappointed, Hurt, Tired'			=>	'Done',
	'Bored, Disappointed, Hurt'			=>	'Done',
	'Disappointed, Distressed, Neutral'	=>	'Done',
	'Disappointed, Distressed, Tired'	=>	'Done',
	'Bored, Disappointed, Distressed'	=>	'Done',

	'Annoyed, Disgusted, Neutral'	=>	'Done',
	'Annoyed, Disgusted, Tired'		=>	'Done',
	'Annoyed, Bored, Disgusted'		=>	'Done',
	'Annoyed, Hurt, Neutral'		=>	'Done',
	'Annoyed, Hurt, Tired'			=>	'Done',
	'Annoyed, Bored, Hurt'			=>	'Done',
	'Annoyed, Distressed, Neutral'	=>	'Done',
	'Annoyed, Distressed, Tired'	=>	'Done',
	'Annoyed, Bored, Distressed'	=>	'Done',

	'Annoyed, Embarrassed, Hurt, Tired'	=>	'Done',
	
	'Anger, Tired'			=>	'Done',
	'Annoyed, Tired'		=>	'Done',
	'Disappointed, Tired'	=>	'Done',
	'Jealous, Tired'		=>	'Done',
	'Neglected, Tired'		=>	'Done',
	
]

?>

