<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web series</title>
    <script>document.documentElement.className = "js"; var supportsCssVars = function () { var e, t = document.createElement("style"); return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e }; supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	
    <link href="https://fonts.googleapis.com/css?family=Anton|Niramit:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/series.css') }}">
   
</head>

<body class="loading">
    <svg class="hidden">
        <symbol id="icon-arrow" viewBox="0 0 24 24">
            <title>arrow</title>
            <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 " />
        </symbol>
    </svg>
    <main>
        <div class="frame">

            <a href="{{route('home')}}">
                <img width="100px" src="{{asset('image/series/logo.png')}}" alt="undermovies logo">
            </a>
            <nav class="menutop">
                <a href="../About/about.html" class="menutop__item">about</a>
                <a class="menutop__item">contact</a>
                <a class="menutop__item menutop__item--social">tw</a>
                <a class="menutop__item menutop__item--social">fb</a>
                <a class="menutop__item menutop__item--social">ig</a>
            </nav>
        </div>
        <nav class="menu">
            <div class="menu__item">
                <span class="menu__item-number">01</span>
                <span class="menu__item-textwrap"><span class="menu__item-text">Action/Adventure</span></span>
                <a class="menu__item-link">explore</a>
            </div>
            <div class="menu__item">
                <span class="menu__item-number">02</span>
                <span class="menu__item-textwrap"><span class="menu__item-text">Comedy</span></span>
                <a class="menu__item-link">explore</a>
            </div>
            <div class="menu__item">
                <span class="menu__item-number">03</span>
                <span class="menu__item-textwrap"><span class="menu__item-text">Science Fiction/Fantasy
                    </span></span>
                <a class="menu__item-link">explore</a>
            </div>
            <div class="menu__item">
                <span class="menu__item-number">04</span>
                <span class="menu__item-textwrap"><span class="menu__item-text">Horror</span></span>
                <a class="menu__item-link">explore</a>
            </div>
            <div class="menu__item">
                <span class="menu__item-number">05</span>
                <span class="menu__item-textwrap"><span class="menu__item-text">Crime/Mystery
                    </span></span>
                <a class="menu__item-link">explore</a>
            </div>
        </nav>
        <div class="page page--preview">
            <div class="gridwrap">
                <div class="grid grid--layout-1">
                    <div class="grid__item" style="background-image: url({{asset('image/series/1\ \(1\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image:  url({{asset('image/series/1\ \(2\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image:  url({{asset('image/series/1\ \(3\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image:  url({{asset('image/series/1\ \(4\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image:  url({{asset('image/series/1\ \(5\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image:  url({{asset('image/series/1\ \(6\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image:  url({{asset('image/series/1\ \(7\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image:  url({{asset('image/series/1\ \(8\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image:  url({{asset('image/series/1\ \(9\).jpeg')}})"></div>
                </div>
                <div class="grid grid--layout-2">
                    <div class="grid__item" style="background-image:  url({{asset('image/series/2\ \(1\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/2\ \(2\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/2\ \(3\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/2\ \(4\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/2\ \(5\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/2\ \(6\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/2\ \(7\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/2\ \(8\).jpeg')}})"></div>
                </div>
                <div class="grid grid--layout-3">
                    <div class="grid__item" style="background-image: url({{asset('image/series/3\ \(1\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/3\ \(2\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/3\ \(3\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/3\ \(4\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/3\ \(5\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/3\ \(6\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/3\ \(7\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/3\ \(8\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/3\ \(9\).jpeg')}})"></div>
                </div>
                <div class="grid grid--layout-4">
                    <div class="grid__item" style="background-image: url({{asset('image/series/4\ \(1\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/4\ \(2\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/4\ \(3\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/4\ \(4\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/4\ \(5\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/4\ \(6\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/4\ \(7\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/4\ \(8\).jpeg')}})"></div>
                </div>
                <div class="grid grid--layout-5">
                    <div class="grid__item" style="background-image: url({{asset('image/series/5\ \(1\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/5\ \(2\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/5\ \(3\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/5\ \(4\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/5\ \(5\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/5\ \(6\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/5\ \(7\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/5\ \(8\).jpeg')}})"></div>
                    <div class="grid__item" style="background-image: url({{asset('image/series/5\ \(9\).jpeg')}})"></div>
                </div>
                <button class="gridback"><svg class="icon icon--arrow">
                        <use xlink:href="#icon-arrow"></use>
                    </svg></button>
            </div><!-- /gridwrap -->
            <div class="content">
                <div class="content__item">
                    Action/adventure series are known for intense and dynamic action sequences. These can include
                    fights, chases, and daring feats that keep the audience on the edge of their seats.
                    The storyline often involves characters embarking on adventurous journeys, quests, or missions.
                    These adventures can take place in exotic or dangerous locations, adding an element of exploration
                    and discovery to the narrative.
                    The main characters typically possess special skills or abilities that contribute to their success
                    in overcoming challenges. These skills may range from combat proficiency and survival instincts to
                    intelligence and technological expertise.
                    There is usually a central conflict or antagonist that the protagonists must face. This could be a
                    villain, an evil organization, or a force threatening the well-being of the characters or the world
                    they inhabit.
                    These series may take place in a variety of settings, ranging from real-world locations to fantasy
                    realms. The diverse settings contribute to the sense of adventure and exploration.
                    Episodes can be standalone adventures or contribute to an overarching storyline. A balance between
                    episodic and serialized elements keeps the audience engaged and encourages them to tune in
                    regularly.
                </div>
                <div class="content__item">
                    Humorous Premise: Comedy series typically have a humorous concept or premise that serves as the
                    foundation for the show. This could be centered around a workplace, a group of friends, a family, or
                    any other relatable setting.

                    Ensemble Cast: Comedy series often feature an ensemble cast of characters, each contributing to the
                    humor in their unique way. These characters may have distinct personalities and quirks that lead to
                    comedic interactions.

                    Situation-Based Humor: The humor in a comedy series often arises from specific situations or
                    scenarios. These situations can be relatable, absurd, or exaggerated, but they usually lead to
                    comedic outcomes.

                    Wordplay and Wit: Clever wordplay, puns, and witty dialogue are common elements in comedy series.
                    The writing is crafted to elicit laughter through clever language and comedic timing.

                    Recurring Themes and Running Gags: Many comedy series incorporate recurring themes or running gags
                    that become familiar to the audience. These elements contribute to the show's identity and can be a
                    source of ongoing humor.

                    Physical Comedy: Physical humor, including slapstick comedy and visual gags, is often used to
                    generate laughs. Characters may find themselves in awkward or absurd situations that lead to comedic
                    outcomes.

                    Breaking the Fourth Wall: Some comedy series involve characters breaking the fourth wall,
                    acknowledging the audience directly, or engaging in meta-humor. This can create a self-aware and
                    playful dynamic.

                    Character Development: While the primary goal is to make the audience laugh, successful comedy
                    series often incorporate character development. Characters may learn, grow, or face challenges in a
                    humorous way.

                    Episodic Structure: Many comedy series follow an episodic structure, where each episode presents a
                    self-contained story or situation. This allows viewers to enjoy episodes independently, although
                    there may be an overarching storyline.

                    Social Commentary: Some comedy series use humor to provide social commentary or satirize real-world
                    situations. This adds depth to the comedy and may resonate with a broader audience.
                </div>
                <div class="content__item">
                    A science fiction/fantasy series is a television genre that combines elements of science fiction and
                    fantasy in its storytelling. These series often explore speculative and imaginative concepts,
                    futuristic settings, advanced technologies, and fantastical elements. Here are key features and
                    elements commonly found in science fiction/fantasy series
                </div>
                <div class="content__item">
                    A horror series is a television genre that aims to evoke fear, suspense, and a sense of dread in its
                    audience. These series often explore themes of the supernatural, psychological terror, and the
                    unknown. Here are key features and elements commonly found in horror series
                </div>
                <div class="content__item">
                    Crime/mystery is a genre of television programming that revolves around the investigation and
                    resolution of criminal cases. These series often combine elements of suspense, intrigue, and
                    detective work, drawing viewers into the process of solving crimes. Here are key features and
                    elements commonly found in crime/mystery series
                </div>
            </div>
        </div><!-- /page -->
    </main>
 
  
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    
</body>

</html>
