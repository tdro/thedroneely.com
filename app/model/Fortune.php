<?php

class Fortune
{
    public function random(): string
    {
        return $this->quotes()[array_rand($this->quotes())];
    }

    public function quotes(): array
    {
        return [
          "
          Augur: The priest of the sacred chicken.
          ",
          "
          We’re currently having technical issues. Please try again later.
          ",
          "
          You probably wouldn’t worry about what people think of you if you could
          know how seldom they do. — Olin Miller
          ",
          "
          Computer science is the only discipline in which we view adding a new wing
          to a building as being maintenance. — Jim Horning
          ",
          "
          God doesn’t play dice. — Albert Einstein
          ",
          "
          As modern times promote hasty eating to a large extent, it is not surprising to
          learn that a great astronomer said: “Two things are infinite, as far as we know
          — the universe and human stupidity.” Ego, Hunger, and Aggression: a Revision
          of Freud’s Theory and Method, Frederick S. Perls
          ",
          "
          Reports that say that something hasn’t happened are always interesting to me,
          because as we know, there are known knowns; there are things we know we know.
          We also know there are known unknowns; that is to say we know there are some
          things we do not know. But there are also unknown unknowns–the ones we don’t
          know we don’t know. — Donald Rumsfeld
          ",
          "
          Everything is local.
          ",
          "
          I read it on the Internet, it has to be true!
          ",
          "
          A debugged program is one for which you have not yet found the conditions
          that make it fail. — Jerry Ogdin
          ",
          "
          If a million people say a foolish thing, it is still a foolish thing. —
          Anatole France
          ",
          "
          “And who better understands the Unix—nature?” Master Foo asked. “Is it
          he who writes the ten thousand lines, or he who, perceiving the emptiness of
          the task, gains merit by not coding?” Upon hearing this, the programmer was
          enlightened.
          — The Unix Koans of Master Foo
          ",
          "
          Immortality — a fate worse than death. — Edgar A. Shoaff
          ",
          "
          Intellect annuls Fate.
          So far as a man thinks, he is free. — Ralph Waldo Emerson
          ",
          "
          Let’s call it an accidental feature. — Larry Wall
          ",
          "
          In the long run we are all dead. — John Maynard Keynes
          ",
          "
          A lot of people I know believe in positive thinking, and so do I. I
          believe everything positively stinks. — Lew Col
          ",
          "
          Ah, but a man’s grasp should exceed his reach,
          Or what’s a heaven for? Robert Browning, — “Andrea del Sarto”
          ",
          "
          All hope abandon, ye who enter here! — Dante Alighieri
          ",
          "
          All men know the utility of useful things;
          but they do not know the utility of futility. — Chuang—tzu
          ",
          "
          And ever has it been known that love knows not its own depth until the
          hour of separation. — Kahlil Gibran
          ",
          "
          Besides, I think Slackware sounds better than ‘Microsoft,’ don’t you? —
          Patrick Volkerding
          ",
          "
          Waving away a cloud of smoke, I look up, and I’m blinded by a bright, white
          light.  It’s God. No, not Richard Stallman, or Linus Torvalds, but God. In
          a booming voice, He says: “THIS IS A SIGN. USE LINUX, THE FREE UNIX SYSTEM
          FOR THE 386”. — Matt Welsh
          ",
          "
          Never trust an operating system you don’t have sources for. — Unknown
          Source
          ",
          "
          Parkinson’s Fifth Law: If there is a way to delay an important decision, the
          good bureaucracy, public or private, will find it.
          ",
          "
          Reliable source: The guy you just met.
          ",
          "
          Thyme’s Law: Everything goes wrong at once.
          ",
          "
          Netscape is not a newsreader, and probably never shall be. — Tom Christiansen
          ",
          "
          You can learn many things from children. How much patience you have,
          for instance. — Franklin P. Jones
          ",
          "
          To be is to program.
          ",
          "
          There’s no easy quick way out, we’re gonna have to live through our
          whole lives, win, lose, or draw. — Walt Kelly
          ",
          "
          Illiterate? Write today for free help!
          ",
          "
          Like winter snow on summer lawn, time past is time gone.
          ",
          "
          Hlade’s Law: If you have a difficult task, give it to a lazy person —
          they will find an easier way to do it.
          ",
          "
          Davis’ Law of Traffic Density: The density of rush—hour traffic
          is directly proportional to 1.5 times the amount of extra time
          you allow to arrive on time.
          ",
          "
          Resisting temptation is easier when you think you’ll probably get
          another chance later on.
          ",
          "
          Do more than anyone expects, and pretty soon everyone will expect more.
          ",
          "
          Turnaucka’s Law: The attention span of a computer is only as long as its
          electrical cord.
          ",
          "
          Power tends to corrupt and absolute power corrupts absolutely.
          Great men are almost always bad men, even when they exercise influence
          and not authority; still more when you superadd the tendency of the
          certainty of corruption by authority. — Lord Acton
          ",
          "
          We can predict everything, except the future.
          ",
          "
          A strong conviction that something must be done is the parent of many
          bad measures. — Daniel Webste
          ",
          "
          Agnes’ Law: Almost everything in life is easier to get into than out of.
          ",
          "
          Weiler’s Law: Nothing is impossible for the man who doesn’t have to do it
          himself.
          ",
          "
          Hanlon’s Razor: Never attribute to malice that which is adequately explained
          by stupidity.
          ",
          "
          Hofstadter’s Law: It always takes longer than you expect, even when you take
          Hofstadter’s Law into account.
          ",
          "
          Murphy’s Law of Research: Enough research will tend to support your theory.
          ",
          "
          Pryor’s Observation: How long you live has nothing to do
          with how long you are going to be dead.
          ",
          "
          Whitehead’s Law: The obvious answer is always overlooked.
          ",
          "
          G. B. Shaw’s Law: Those who can — do.
          Those who can’t — teach.
          Martin’s Extension: Those who cannot teach — administrate.
          ",
          "
          Johnson’s First Law: When any mechanical contrivance fails, it will do so at the
          most inconvenient possible time.
          ",
          "
          Guru: A computer owner who can read the manual.
          ",
          "
          First law of debate: Never argue with a fool. People might not know the
          difference.
          ",
          "
          Woodward’s Law: A theory is better than its explanation.
          ",
          "
          Lie: A very poor substitute for the truth, but the only one discovered to date.
          ",
          "
          Hildebrant’s Principle: If you don’t know where you are going, any road will
          get you there.
          ",
          "
          Committee: A group of men who individually can do nothing but as a group
          decide that nothing can be done. — Fred Allen
          ",
          "
          “The stronger a culture, the less it fears the radical fringe.
          The more paranoid and precarious a culture, the less tolerance it offers.”
          — Joel Salatin, Everything I Want to Do Is Illegal: War Stories from the
          Local Food Front
          ",
          "
          “The command—line tools of Unix are crude and backward,” he scoffed.
          “Modern, properly designed operating systems do everything through a
          graphical user interface.”
          Master Foo said nothing, but pointed at the moon. A nearby dog began to bark at
          the master’s hand.
          — The Unix Koans of Master Foo
          ",
          "
          The master replied: “There is a defect, and I am considering the best way to
          repair it.”
          The novice said, “You preach often about the importance of setting priorities.
          How, then, can you obsess about something so tiny and unimportant?” Without
          saying a word,
          the master raised his staff and brought it down hard upon
          the bare left foot of the novice, breaking his smallest toe.
          — Codeless Code
          ",
          "
          “Master Foo, I am gravely troubled. In my youth, those who followed the Great
          Way of Unix used
          software that was simple and unaffected, like ed and mailx. Today, they use vim
          and mutt.
          Tomorrow I fear they will use KMail and Evolution, and Unix will have become
          like
          Windows — bloated and covered over with GUIs.”
          Master Foo said: “But what software do you use when you want to draw a
          poster?”
          — The Unix Koans of Master Foo
          ",
          "
          “Master Foo,” he asked “why do Unix users not employ antivirus programs?
          And defragmentors? And malware cleaners?”
          Master Foo smiled, and said “When your house is well constructed,
          there is no need to add pillars to keep the roof in place.”
          — The Unix Koans of Master Foo
          ",
          "
          The recruiter said, “I have observed that Unix hackers scowl or become
          annoyed when
          I ask them how many years of experience they have in a new programming
          language. Why is this so?”
          Master Foo stood, and began to pace across the office floor.
          The recruiter was puzzled, and asked “What are you doing?”
          “I am learning to walk,” replied Master Foo.
          — The Unix Koans of Master Foo
          ",
          "
          “Is your code ever completely without stain and flaw?” demanded Master Foo.
          “No,” admitted the zealot, “no man’s is.”
          “The wisdom of the Patriarchs” said Master Foo, “was that they knew they
          were fools.”
          Upon hearing this, the zealot was enlightened.
          — The Unix Koans of Master Foo
          ",
          "
          Lewis’s Law of Travel: The first piece of luggage out of the chute doesn’t
          belong to anyone, ever.
          ",
          "
          Dow’s Law: In a hierarchical organization, the higher the level,
          the greater the confusion.
          ",
          "
          Option Paralysis: The tendency, when given unlimited choices, to make none.
          — Douglas Coupland, “Generation X: Tales for an Accelerated Culture”
          ",
          "
          Slous’ Contention: If you do a job too well, you’ll get stuck with it.
          ",
          "
          Udall’s Fourth Law: Any change or reform you make is going to have consequences
          you
          don’t like.
          ",
          "
          Sacher’s Observation: Some people grow with responsibility — others merely
          swell.
          ",
          "
          Law of the Jungle: He who hesitates is lunch.
          ",
          "
          Fifth Law of Procrastination: Procrastination avoids boredom; one never has the
          feeling that
          there is nothing important to do.
          ",
          "
          Boucher’s Observation: He who blows his own horn always plays the music
          several octaves higher than originally written.
          ",
          "
          Booker’s Law: An ounce of application is worth a ton of abstraction.
          ",
          "
          Williams and Holland’s Law: If enough data is collected, anything may be proven
          by statistical
          methods.
          ",
          "
          Burke’s Postulates: Anything is possible if you don’t know what you are talking
          about.
          Don’t create a problem for which you do not have the answer.
          ",
          "
          Barth’s Distinction: There are two types of people: those who divide people
          into two
          types, and those who don’t.
          ",
          "
          Hanson’s Treatment of Time: There are never enough hours in a day, but always
          too many days
          before Saturday.
          ",
          "
          Peers’ Law: The solution to a problem changes the nature of the problem.
          ",
          "
          Stone’s Law: One man’s “simple” is another man’s “huh?”
          ",
          "
          Government’s Law: There is an exception to all laws.
          ",
          "
          Hitchcock’s Staple Principle: The stapler runs out of staples only while you
          are trying to
          staple something.
          ",
          "
          Finagle’s Seventh Law: The perversity of the universe tends toward a maximum.
          ",
          "
          Chism’s Law of Completion: The amount of time required to complete a government
          project is
          precisely equal to the length of time already spent on it.
          ",
          "
          Chisolm’s First Corollary to Murphy’s Second Law: When things just can’t
          possibly get any worse, they will.
          ",
          "
          Murphy’s Laws: (1) If anything can go wrong, it will.
          (2) Nothing is as easy as it looks.
          (3) Everything takes longer than you think it will.
          ",
          "
          Carswell’s Corollary: When ever man comes up with a better mousetrap,
          nature invariably comes up with a better mouse.
          ",
          "
          Putt’s Law: Technology is dominated by two types of people:
          Those who understand what they do not manage.
          Those who manage what they do not understand.
          ",
          "
          Rule of the Great: When people you greatly admire appear to be thinking deep
          thoughts, they probably are thinking about lunch.
          ",
          "
          There must be more to life than having everything. — Maurice Sendak
          ",
          "
          In every hierarchy the cream rises until it sours. — Dr. Laurence J. Peter
          ",
          "
          The rich have become richer, and the poor have become poorer;
          and the vessel of the State is driven between the Scylla and Charybdis of
          anarchy and despotism.
          — Percy Bysshe Shelley
          ",
          "
          While money can’t buy happiness, it certainly lets you choose your own
          form of misery.
          ",
          "
          He has not acquired a fortune; the fortune has acquired him. — Bion
          ",
          "
          How come everyone’s going so slow if it’s called rush hour?
          ",
          "
          Work expands to fill the time available. — Cyril Northcote Parkinson, “The
          Economist”, 1955
          ",
          "
          Getting the job done is no excuse for not following the rules.
          Corollary: Following the rules will not get the job done.
          ",
          "
          Every cloud has a silver lining; you should have sold it, and bought titanium.
          ",
          "
          To avoid criticism, do nothing, say nothing, be nothing. — Elbert Hubbard
          ",
          "
          To get something done, a committee should consist of no more than three
          persons, two of them absent.
          ",
          "
          If a thing’s worth doing, it is worth doing badly. — G. K. Chesterton
          ",
          "
          There’s no such thing as a free lunch. — Milton Friedman
          ",
          "
          The first lesson of economics is scarcity: there is never enough of anything to
          fully satisfy all those who want it. The first lesson of politics is to
          disregard the first lesson of economics. — Thomas Sowell
          ",
          "
          The problem isn’t that Johnny can’t read. The problem isn’t even that Johnny
          can’t think. The problem is that Johnny doesn’t know what thinking is; he
          confuses it with feeling. — Thomas Sowell
          ",
          "
          It takes considerable knowledge just to realize the extent of your own
          ignorance. — Thomas Sowell
          ",
          "
          If you only have a hammer, you tend to see every problem as a nail.
          — Maslow’s Golden Hammer
          ",
          "
          Ninety percent of everything is crap. — Theodore Sturgeon
          ",
          "
          It’s easier to take it apart than to put it back together. — Washlesky
          ",
          "
          Before you ask more questions, think about whether you really want to
          know the answers. — Gene Wolfe, “The Claw of the Conciliator”
          ",
          "
          Your picture of the world often changes just before you get it into focus.
          ",
          "
          You can observe a lot just by watching. — Yogi Berra
          ",
          "
          Always borrow money from a pessimist; he doesn’t expect to be paid back.
          ",
          "
          In war, truth is the first casualty. — U Thant
          ",
          "
          The hardware designer said: “It is rumored that you are a great programmer.
          How many lines of code do you write per year?”
          Master Foo replied with a question: “How many square inches of silicon do you
          lay out per year?” — The Unix Koans of Master Foo
          ",
          "
          The student said: “How, then, are those enlightened in the Unix Way to return
          to the Windows world?”
          Master Foo said: “To return to Windows, you have but to boot it up.” —
          The Unix Koans of Master Foo
          ",
          "
          The master considered this, and said: “It is certain that we could forgo
          testing altogether, if we knew our code to be perfect. How, then, may we
          achieve perfection?”
          “Through practice,” said one monk.
          “Through diligent study,” said another.
          “Through the appeasement of the proper gods,” said a third.
          — Codeless Code
          ",
          "
          If you live long enough, you’ll see that every victory turns into a defeat. —
          Simone de Beauvoir
          ",
          "
          Truth is stranger than fiction, but it is because fiction is obliged to stick
          to possibilities; truth isn’t.
          — Mark Twain
          ",
          "
          There are some people so addicted to exaggeration that they can’t tell the
          truth without lying. — Josh Billings
          ",
          "
          “They that soar too high, often fall hard, making a low and level dwelling
          preferable.
          The tallest trees are most in the power of the winds, and ambitious men of the
          blasts of fortune.
          Buildings have need of a good foundation, that lie so much exposed to the
          weather.”
          — Dale Carnegie, The Art of Public Speaking
          ",
          "
          “Speech is silvern, Silence is golden; Speech is human, Silence is divine.”
          — Dale Carnegie, The Art of Public Speaking
          ",
          "
          The woods are lovely, dark and deep.
          — Robert Frost
          ",
          "
          Before attempting to compile this virus make sure you have the correct version
          of glibc installed,
          and that your firewall rules are set to ‘allow everything’.
          — “Why GNU/Linux Viruses are fairly uncommon” from Charlie Harvey
          ",
          "
          The words fly away, the writings remain.
          ",
          "
          Rule of Life Number One — Never get separated from your luggage.
          ",
          "
          He who knows nothing, knows nothing.
          But he who knows he knows nothing knows something.
          And he who knows someone whose friend’s wife’s brother knows nothing,
          he knows something.  Or something like that.
          ",
          "
          “The biggest problem facing software engineering is the one it will
          never solve — politics.” — Gavin Baker
          ",
          "
          (1) The world is full of fascinating problems waiting to be solved.
          (2) No problem should ever have to be solved twice.
          (3) Boredom and drudgery are evil.
          (4) Freedom is good.
          (5) Attitude is no substitute for competence.
          — Eric S. Raymond
          ",
          "
          “Give someone a program, and you’ll frustrate them for a day.
          Teach someone to program, and you’ll frustrate them for a lifetime.”
          — Unknown
          ",
          "
          “No individual raindrop considers itself responsible for the flood.”
          — Unknown
          ",
          "
          “We’ve gotten to the point where everybody’s got a right and nobody’s
          got a responsibility.”
          — Newton Minow
          ",
          "
          “A library is infinity under a roof.”
          — Gail Carson Levine
          ",
          "
          “If you torture the data long enough, it will confess to anything.”
          — Darrell Huff, How to Lie With Statistics
          ",
          "
          “You can’t wake a person who is pretending to be asleep.”
          — Navajo Proverb
          ",
          "
          “During the gold rush its a good time to be in the pick and shovel
          business.”
          — Mark Twain
          ",
          "
          The 1% Rule: The number of people who create content on the Internet represents
          approximately
          1% of the people who view that content.
          ",
          "
          Those who have some means think that the most important thing in the
          world is love. The poor know that it is money. — Gerald Brenan
          ",
          "
          I know not with what weapons World War III will be fought, but World
          War IV will be fought with sticks and stones. — Albert Einstein
          ",
          "
          Why is the alphabet in that order? Is it because of that song? — Steven Wright
          ",
          "
          Important letters which contain no errors will develop errors in the mail.
          Corresponding errors will show up in the duplicate while the Boss is reading
          it. Vital papers will demonstrate their vitality by spontaneously moving
          from where you left them to where you can’t find them.
          ",
          "
          If the code and the comments disagree, then both are probably wrong. — Norm
          Schryer
          ",
          "
          It is easy when we are in prosperity to give advice to the afflicted. —
          Aeschylus
          ",
          "
          Olmstead’s Law: After all is said and done, a hell of a lot more is said than
          done.
          ",
          "
          I wish there was a knob on the TV to turn up the intelligence.  There’s a
          knob called “brightness”, but it doesn’t seem to work. — Gallagher
          ",
          "
          Technological progress has merely provided us with more efficient means
          for going backwards. — Aldous Huxley
          ",
          "
          Anthony’s Law of the Workshop: Any tool when dropped, will roll into the least
          accessible
          corner of the workshop.
          ",
          "
          Remember that there is an outside world to see and enjoy. — Hans Liepmann
          ",
          "
          Flying is the second greatest feeling you can have. The greatest feeling?
          Landing... Landing is the greatest feeling you can have.
          ",
          "
          “There is nothing new under the sun, but there are lots of old things
           we don’t know yet.” — Ambrose Bierce
          ",
          "
          If you want to travel around the world and be invited to speak at a lot
          of different places, just write a Unix operating system. — Linus Torvalds
          ",
          "
          Hope deferred maketh the heart sick: but when the desire cometh, it is a tree
          of life.
          — Proverbs
          ",
          "
          If the tree fall toward the south, or toward the north, in the place where the
          tree falleth, there it shall be.
          — Ecclesiastes
          ",
          "
          “A blow that would kill a civilized man soon heals on a savage. The higher we
          go in the scale of life,
          the greater is the capacity for suffering.”
          — Dale Carnegie, The Art of Public Speaking
          ",
          "
          “The gun that scatters too much does not bag the birds.”
          — Dale Carnegie, The Art of Public Speaking
          ",
          "
          “All the labour of man is for his mouth, and yet the appetite is not
          filled.”
          — Ecclesiastes
          ",
          "
          The Fifth Law of Computer Programming: Any given program will expand to fill
          all available memory.
          ",
          "
          Corcoroni’s First Law of Bus Transportation: The bus that left the stop just
          before you got there is your bus.
          ",
          "
          Law of Annoyance: When working on a project, if you put away a tool that you’re
          certain you’re finished with,
          you will need it instantly.
          ",
          "
          The First Discovery of Christmas Morning: Batteries not included.
          ",
          "
          Corcoroni’s Third Law of Bus Transportation: All buses heading in the opposite
          direction drive off the face of
          the earth and never return.
          ",
          "
          Durrell’s Parameter: The faster the plane, the narrower the seats.
          ",
          "
          Ettorre’s Observation: The other line moves faster.
          Corollary: Don’t try to change lines. The other line — the one you were in
          originally — will then move faster.
          ",
          "
          Ehrman’s Commentary: Things will get worse before they will get better. Who
          said things would get better?
          ",
          "
          Ducharme’s Precept: Opportunity always knocks at the least opportune moment.
          ",
          "
          Dijkstra’s Prescription for Programming Inertia: If you don’t know what your
          program is supposed to do, you’d better
          not start writing it.
          ",
          "
          Commoner’s First Law of Ecology: No action is without side—effects.
          ",
          "
          Cohn’s Law: The more time you spend in reporting on what you are doing, the
          less time you have to do anything.
          Stability is achieved when you spend all your time doing nothing but reporting
          on the nothing you are doing.
          ",
          "
          Law of Permanence: Political power is as permanent as today’s newspaper.
          Ten years from now, few will know or care who the most powerful man in any
          state was today.
          ",
          "
          Clarke’s Third Law: Any sufficiently advanced technology is indistinguishable
          from magic.
          ",
          "
          Cheops’s Law: Nothing ever gets built on schedule or within budget.
          ",
          "
          Hacker’s Law: The belief that enhanced understanding will necessarily stir a
          nation or an
          organization to action is one of mankind’s oldest illusions.
          ",
          "
          Harris’s Lament: All the good ones are taken.
          ",
          "
          Issawi’s Law of the Conservation of Evil: The total amount of evil in any
          system remains constant.
          Hence, any diminution in one direction — for instance, a reduction in poverty
          or unemployment —
          is accompanied by an increase in another, e.g., crime or air pollution.
          ",
          "
          Kelley’s Law: Last guys don’t finish nice.
          ",
          "
          Knoll’s Law of Media Accuracy: Everything you read in the newspapers is
          absolutely true except for that
          rare story of which you happen to have firsthand knowledge.
          ",
          "
          Kohn’s Second Law: Any experiment is reproducible until another laboratory
          tries to repeat it.
          ",
          "
          Lowrey’s Law of Expertise: Just when you get really good at something, you
          don’t need to do it any more.
          ",
          "
          Lynch’s Law: When the going gets tough, everybody leaves.
          ",
          "
          Martin’s Law of Communication: The inevitable result of improved and enlarged
          communication between
          different levels in a hierarchy is a vastly increased area of misunderstanding.
          ",
          "
          Cahn’s Axiom: When all else fails, read the instructions.
          ",
          "
          Horngren’s Observation: The real world is a special case.
          ",
          "
          Merkin’s Maxim: When in doubt, predict that the present trend will continue.
          ",
          "
          Comins’ Law: People will accept your idea much more readily if you tell them
          Benjamin Franklin said it first.
          ",
          "
          Rosenfield’s Regret: The most delicate component will be dropped.
          ",
          "
          Cunningham’s Law: The best way to get the right answer on the Internet is not
          to ask a question; it’s to post the wrong answer.
          ",
          "
          Connected. Take this REPL, brother, and may it serve you well.
          ",
          "
          First Law of Laboratory Work: Hot glass looks exactly the same as cold glass.
          ",
          "
          Leahy’s Law: If a thing is done wrong often enough, it becomes right.
          ",
          "
          Luce’s Law: No good deed goes unpunished.
          ",
          "
          Putt’s Corollary: Every technical hierarchy, in time, develops a competence
          inversion.
          ",
          "
          Reed’s Law: The utility of large networks, particularly social networks, scales
          exponentially with the size of the network.
          ",
          "
          We should forget about small efficiencies, say about 97% of the time:
          premature optimization is the root of all evil. Yet we should not pass up
          our opportunities in that critical 3%. A good programmer will not be
          lulled into complacency by such reasoning, he will be wise to look
          carefully at the critical code; but only after that code has been
          identified. — Donald Knuth, Structured Programming with Go To Statements
          ",
          "
          The Pareto Principle: Most things in life are not distributed evenly.
          ",
          "
          The KISS principle: Keep it simple, stupid.
          ",
          "
          Goodhart’s Law: When a measure becomes a target, it ceases to be a good measure.
          ",
          "
          Are we consing yet?
          ",
          "
          The first thing a man will do for his ideals is lie. — Joseph Aloïs Schumpeter
          ",
          "
          “The man who does not read has no advantage over the man who cannot read.”
          — Mark Twain
          ",
          "
          Known Knowns, Known Unknowns, Unknown Unknowns.
          ",
          "
          Historian’s Rule: Any event, once it has occurred, can be made to appear
          inevitable by a competent historian.
          ",
          "
          Gretzky’s Truism: You miss 100% of the shots you never take.
          ",
          "
          Gresham’s Law: Bad money drives out good.
          ",
          "
          Glasow’s Comment: There’s something wrong if you’re always right.
          ",
          "
          Franklin’s Rule: Blessed is he who expects nothing, for he shall not be
          disappointed.
          ",
          "
          Fetridge’s Law: Important things that are supposed to happen do not happen,
          especially when people are looking.
          ",
          "
          Farkus’ Law: There will always be a closer parking space than the one you
          found. Goodman’s Corollary: But if
          you go looking for it, someone else will already have taken it.
          ",
          "
          Hagenbach and Nuremberg’s Poor Defense: “I was only following orders, sir. An
          order is an order.”
          ",
          "
          McIntyre’s First Law: Under the right circumstances, anything I tell you
          could be wrong.
          ",
          "
          Those who don’t understand Unix are condemned to reinvent it, poorly.
          — Henry Spencer, in Introducing Regular Expressions (2012) by Michael
          Fitzgerald
          ",
          "
          Hoare’s Law of Large Problems: Inside every large problem is a small problem
          struggling to get out.
          ",
          "
          Due to a shortage of devoted followers, the production of great leaders has
          been discontinued.
          ",
          "
          Any sufficiently advanced technology is indistinguishable from a rigged demo.
          ",
          "
          Health is merely the slowest possible rate at which one can die.
          ",
          "
          It is against the grain of modern education to teach children to program.
          What fun is there in making plans, acquiring discipline in organizing thoughts,
          devoting attention to detail, and learning to be self—critical? — Alan
          Perlis
          ",
          "
          Non—Reciprocal Laws of Expectations: Negative expectations yield negative
          results.
          Positive expectations yield negative results.
          ",
          "
          Gerrold’s Laws of Infernal Dynamics: (1) An object in motion will always be
          headed in the wrong direction.
          (2) An object at rest will always be in the wrong place.
          (3) The energy required to change either one of these states will always be
          more than you wish to expend,
          but never so much as to make the task totally impossible.
          ",
          "
          Kinkler’s First Law: Responsibility always exceeds authority.
          ",
          "
          Kinkler’s Second Law: All the easy problems have been solved.
          ",
          "
          There are no games on this system.
          ",
          "
          Committee Rules: (1) Never arrive on time, or you will be stamped a beginner.
          (2) Don’t say anything until the meeting is half over; this stamps you as being
          wise.
          (3) Be as vague as possible; this prevents irritating the others.
          (4) When in doubt, suggest that a subcommittee be appointed.
          (5) Be the first to move for adjournment; this will make you popular — it’s
          what everyone is waiting for.
          ",
          "
          Ogden’s Law: The sooner you fall behind, the more time you have to catch up.
          ",
          "
          “About the time we think we can make ends meet, somebody moves the ends.”
          — Herbert Hoover
          ",
          "
          Chesterton’s Fence: Reforms should not be made until the reasoning behind the
          existing state of affairs is understood.
          ",
          "
          I returned, and saw under the sun, that the race is not to the swift, nor the
          battle to the strong, neither yet bread to
          the wise, nor yet riches to men of understanding, nor yet favour to men of
          skill; but time and chance happeneth to them all. — Ecclesiastes
          ",
          "
          Schmidt’s Law: If you mess with a thing long enough, it’ll break. Wyszkowski’s
          Second Law: Anything can be made to work
          if you fiddle with it long enough.
          ",
          "
          Hoover’s Affirmation: Blessed are the young for they shall inherit the national
          debt.
          ",
          "
          Sueker’s Note: If you need “n” items of anything, you will have “n-1” in
          stock.
          ",
          "
          Always remember that you are absolutely unique. Just like everyone else. —
          Margaret Mead
          ",
          "
          DRY: Don’t repeat yourself. WET: Write everything twice.
          ",
          "
          Isaiah’s Observation: And judgment is turned away backward, and justice
          standeth afar off: for truth is fallen in the street,
          and equity cannot enter.
          ",
          "
          The best things in life are for a fee.
          ",
          "
          “It is by the fortune of God that, in this country, we have three benefits:
          freedom of speech, freedom of thought, and the
          wisdom never to use either.” — Mark Twain
          ",
          "
          The Sixth Commandment of Frisbee: The greatest single aid to distance is for
          the disc to be going in a
          direction you did not want. (Goes the wrong way = Goes a long way.) — Dan
          Roddick
          ",
          "
          Of course you have a purpose — to find a purpose.
          ",
          "
          Unix gives you just enough rope to hang yourself — and then a couple
          of more feet, just to be sure. — Eric Allman
          ",
          "
          Connected. Hacks and glory await!
          ",
          "
          Connected. May the source be with you!
          ",
          "
          Survivorship Bias: Concentrating on the people or things that “survived” some
          process and inadvertently
          overlooking those that didn’t because of their lack of visibility.
          ",
          "
          Curse of Knowledge: When better informed people find it extremely difficult
          to think about problems from
          the perspective of lesser informed people.
          ",
          "
          “The best way to control the opposition is to lead it ourselves.” —
          Vladimir Lenin
          ",
          "
          Going to church does not make a person religious, nor does going to school make
          a person educated,
          any more than going to a garage makes a person a car.
          ",
          "
          What the large print giveth, the small print taketh away.
          ",
          "
          Anyone can hold the helm when the sea is calm. — Publius Syrus
          ",
          "
          Power corrupts. And atomic power corrupts atomically.
          ",
          "
          Power corrupts. And big power corrupts bigly.
          ",
          "
          Nearly all men can stand adversity, but if you want to test a man’s character,
          give him power. — Abraham Lincoln
          ",
          "
          Now and then an innocent person is sent to the legislature.
          ",
          "
          If entropy is increasing, where is it coming from?
          ",
          "
          When in doubt, use brute force. — Ken Thompson
          ",
          "
          Grelb’s Reminder: Eighty percent of all people consider themselves to be above
          average drivers.
          ",
          "
          Just when you thought you were winning the rat race, along comes a faster rat!
          ",
          "
          The trouble with being punctual is that people think you have nothing more
          important to do.
          ",
          "
          To iterate is human, to recurse, divine. — Robert Heller
          ",
          "
          Just as most issues are seldom black or white, so are most good solutions
          seldom black or white.
          Beware of the solution that requires one side to be totally the loser and the
          other side to be totally the winner.
          The reason there are two sides to begin with usually is because neither side
          has all the facts.
          Therefore, when the wise mediator effects a compromise, he is not acting from
          political motivation.
          Rather, he is acting from a deep sense of respect for the whole truth. —
          Stephen R. Schwambach
          ",
          "
          One reason why George Washington Is held in such veneration: He never blamed
          his problems
          on the former Administration. — George O. Ludcke
          ",
          "
          If a tree falls in a forest and no one is around to hear it, does it make a
          sound?
          If you didn’t get caught, did you really do it?
          ",
          "
          Rhode’s Law: When any principle, law, tenet, probability, happening,
          circumstance, or result can in no way be directly,
          indirectly, empirically, or circuitously proven, derived, implied, inferred,
          induced, deducted, estimated, or scientifically
          guessed, it will always for the purpose of convenience, expediency, political
          advantage, material gain, or personal comfort,
          or any combination of the above, or none of the above, be unilaterally and
          unequivocally assumed, proclaimed, and adhered
          to as absolute truth to be undeniably, universally, immutably, and infinitely
          so, until such time as it
          becomes advantageous to assume otherwise, maybe.
          ",
          "
          The trouble with doing something right the first time is that nobody
          appreciates how difficult it was.
          ",
          "
          Modern Unix is a catastrophe. It’s the “Un—Operating System”:
          unreliable,
          unintuitive, unforgiving, unhelpful, and underpowered. Little is more
          frustrating
          than trying to force Unix to do something useful and nontrivial. — The Unix
          Haters Handbook
          ",
          "
          All syllogisms have three parts; therefore this is not a syllogism.
          ",
          "
          Murphy’s Sixth Law: If you perceive that there are four possible ways in
          which a procedure can go wrong, and circumvent these, then a fifth way,
          unprepared for, will promptly develop.
          ",
          "
          Miksch’s Law: If a string has one end, then it has another end.
          ",
          "
          Irrationality is the square root of all evil. — Douglas Hofstadter
          ",
          "
          Jone’s Law: The man who smiles when things go wrong has thought of someone to
          blame it on.
          ",
          "
          Parkinson’s Fourth Law: The number of people in any working group tends to
          increase regardless
          of the amount of work to be done.
          ",
          "
          Wicker’s Law: Government expands to absorb revenue and then some.
          ",
          "
          Mr. Cole’s Axiom: The sum of the intelligence on the planet is a constant; the
          population is growing.
          ",
          "
          Never put off till tomorrow what you can avoid all together.
          ",
          "
          “If you give someone your name, they can take your soul. If you give them
          your birthday,
          they can control your life.” — Yuuko Ichihara
          ",
          "
          King Solomon’s Lament: There is no remembrance of former things; neither shall
          there be any
          remembrance of things that are to come with those that shall come after.
          ",
          "
          Friendship: A ship big enough to carry
          two in fair weather, but only one in foul. — The Devil’s Dictionary
          ",
          "
          “You really think someone would do that? Just go on the Internet and tell
          lies?”
          — Buster the Myth Maker
          ",
          "
          “We pigs are brainworkers. The whole management and organisation of this farm
          depend on us.
          Day and night we are watching over your welfare. It is for your sake that we
          drink the milk and eat those apples.”
          — George Orwell’s Animal Farm
          ",
          "
          Andrea: Unhappy the land that has no heroes. Galileo: No, unhappy the land that
          needs heroes.
          — Bertolt Brecht, “Life of Galileo”
          ",
          "
          User: A programmer who will believe anything you tell him. — The New Hacker’s
          Dictionary
          ",
          "
          Testing can show the presence of bugs, but not their absence. — Dijkstra
          ",
          "
          Gumperson’s Law: The probability of a given event occurring is inversely
          proportional to its desirability.
          ",
          "
          It is easier to port a shell than a shell script. — Larry Wall
          ",
          "
          Logic doesn’t apply to the real world. — Marvin Minsky
          ",
          "
          Those who do not do politics will be done in by politics. — French Proverb
          ",
          "
          It’s not what you know, it’s who you know.
          ",
          "
          Leibowitz’s Rule: When hammering a nail, you will never hit your finger if you
          hold the hammer with both hands.
          ",
          "
          When the government’s remedies don’t match your problem, you
          modify the problem, not the remedy.
          ",
          "
          Just because everything is different doesn’t mean anything has changed. —
          Irene Peter
          ",
          "
          Any great truth can — and eventually will — be expressed as a cliche — a
          cliche is a
          sure and certain way to dilute an idea. For instance, my grandmother used to
          say, “The black
          cat is always the last one off the fence.” I have no idea what she meant, but
          at one time,
          it was undoubtedly true. — Solomon Short
          ",
          "
          When I was a boy I was told that anybody could become President. Now I’m
          beginning to believe it. — Clarence Darrow
          ",
          "
          Science is built up with facts, as a house is with stones. But a collection of
          facts is no more a science than a heap
          of stones is a house. — Henri Poincaré
          ",
          "
          Insanity is the final defense.
          ",
          "
          Mosher’s Law of Software Engineering: Don’t worry if it doesn’t work right. If
          everything did, you’d be out of a job.
          ",
          "
          Swipple’s Rule of Order: Whoever shouts the loudest has the floor.
          ",
          "
          There are no solutions. There are only trade-offs. — Thomas Sowell in A
          Conflict of Visions: Ideological Origins of
          Political Struggles
          ",
          "
          For the love of life, there’s a trade–off; We could loose it all, but we’ll
          go down fighting. — David Sylvian and Koji Haijima, For The Love of Life
          ",
          "
          The nice thing about standards is that there are so many of them to choose
          from. — Andrew S. Tanenbaum
          ",
          "
          Real users never know what they want, but they always know when your program
          doesn’t deliver it.
          ",
          "
          Democracy is a device that ensures we shall be governed no better than we
          deserve. — George Bernard Shaw
          ",
          "
          A candidate is a person who gets money from the rich and votes from the poor to
          protect them from each other
          or something like that.
          ",
          "
          Fudd’s First Law of Opposition: Push something hard enough and it will fall
          over.
          ",
          "
          The Roman Rule: The one who says it cannot be done should never interrupt the
          one who is doing it.
          ",
          "
          Betteridge’s Law of Headlines: Any headline that ends in a question mark can be
          answered by the word no.
          ",
          "
          What people say, what people do, and what they say they do are entirely
          different things. — Margaret Mead
          ",
          "
          Newton’s Flaming Laser Sword: What cannot be settled by experiment is not worth
          debating.
          ",
          "
          The Sagan Standard: Extraordinary claims require extraordinary evidence.
          ",
          "
          Wirth’s Law: Software gets slower more quickly than hardware gets faster.
          ",
          "
          Let justice prevail even though the heavens may fall.
          ",
          "
          Zawinski’s Law: Every program attempts to expand until it can read mail.
          Corollary: Those programs which cannot expand are replaced by ones which can.
          ",
          "
          Gates’s Law: The speed of software halves every 18 months.
          ",
          "
          Lubarsky’s Law of Cybernetic Entomology: There is always one more bug.
          ",
          "
          With great privilege comes great responsibility.
          ",
          "
          Kernighan’s Law: Everyone knows that debugging is twice as hard as writing a
          program
          in the first place. So if you’re as clever as you can be when you write it, how
          will you ever debug it?
          ",
          "
          Wiio’s First Law of Communication: Communication usually fails, except by
          accident. Corollary: (1)
          If communication can fail, it will. (2) If communication cannot fail, it still
          most usually fails.
          (3) If communication seems to succeed in the intended way, there’s a
          misunderstanding.
          (4) If you are content with your message, communication certainly fails.
          ",
          "
          Wiio’s Second Law of Communication: If a message can be interpreted in several
          ways, it will be
          interpreted in a manner that maximizes the damage.
          ",
          "
          Wiio’s Third Law of Communication: There is always someone who knows better
          than you what you meant with your message.
          ",
          "
          Wiio’s Fourth Law of Communication: The more we communicate, the worse
          communication succeeds. Corollary:
          The more we communicate, the faster misunderstandings propagate.
          ",
          "
          Wiio’s Fifth Law of Communication: In mass communication, the important thing
          is not how things are but how they seem to be.
          ",
          "
          Wiio’s Sixth Law of Communication: The importance of a news item is inversely
          proportional to the square of the distance.
          ",
          "
          Wiio’s Seventh Law of Communication: The more important the situation is, the
          more probable you had forgotten an essential
          thing that you remembered a moment ago.
          ",
          "
          “We buy things we don’t need with money we don’t have to impress people we
          don’t like.” — Dave Ramsey
          ",
          "
          Just living in the database.
          ",
          "
          To protect your rights, we need to prevent others from denying you these rights
          or asking you to surrender these rights.
          Therefore, you have certain responsibilities — responsibilities to respect
          the freedom of others.
          ",
          "
          We trust you have received the usual lecture from the local system
          administrator. It usually boils down to these three things:
          (1) Respect the privacy of others.
          (2) Think before you type.
          (3) With great power comes great responsibility.
          ",
          "
          Frequency Illusion (Baader—Meinhof Phenomenon): The illusion where something
          that has recently come to one’s
          attention suddenly seems to appear with improbable frequency shortly afterwards.
          ",
          "
          The Backdraft Phenomenon: A rapid or explosive burning of superheated gasses in
          a fire, caused when oxygen rapidly
          enters an oxygen—depleted environment.
          ",
          "
          March comes in like a lion and goes out like a lamb.
          ",
          "
          Perhaps the most widespread illusion is that if we were in power we would
          behave very differently from those who now hold it — when, in truth, in
          order to get power we would have to become very much like them.
          ",
          "
          Software is much harder to change en masse than hardware. C++ and Java, say,
          are presumably growing faster than plain C, but I bet C will still be around.
          For infrastructure technology, C will be hard to displace. — Dennis Ritchie
          ",
          "
          Pray to God, but keep rowing to shore. — Russian Sailor’s Proverb
          ",
          "
          Do you guys know what you’re doing, or are you just hacking?
          ",
          "
          Jacquin’s Postulate on Democratic Government: No man’s life, liberty, or
          property are safe while the
          legislature is in session.
          ",
          "
          I never cheated an honest man, only rascals. They wanted something for
          nothing. I gave them nothing for something. — The Yellow Kid
          ",
          "
          Seeing is deceiving. It’s eating that’s believing. — James Thurber
          ",
          "
          A great nation is any mob of people which produces at least one honest
          man a century.
          ",
          "
          Nothing makes a person more productive than the last minute.
          ",
          "
          Don’t believe everything you read on the Internet.
          ",
          "
          One man’s simple is another man’s complex.
          ",
          "
          Every so often the stars align.
          ",
          "
          Nobody wants a backup, everybody wants a restore.
          ",
          "
          Kingmaker Scenario: A player who is unable to win with the ability
          to influence who will win.
          ",
          "
          Programmers do it bit by bit.
          ",
          "
          Brontosaurus Principle: Organizations can grow faster than their brains can
          manage them
          in relation to their environment and to their own physiology:  when this
          occurs, they are
          an endangered species. — Thomas K. Connellan
          ",
          "
          Today will be remembered until tomorrow.
          ",
          "
          It’s ten o’clock. Do you know where your processes are?
          ",
          "
          It’s ten o’clock. Do you know where your backups are?
          ",
          "
          It’s ten o’clock. Do you know where the source code is?
          ",
          "
          This is a test of the emergency broadcast system. Had there been an
          actual emergency, then you would no longer be here.
          ",
          "
          To teach is to learn twice. — Joseph Joubert
          ",
          "
          Measure with a micrometer. Mark with chalk. Cut with an axe.
          ",
          "
          The so—called lessons of history are for the most part the rationalizations
          of the victors. History is written by the survivors. — Max Lerner
          ",
          "
          (1) Everything depends. (2) Nothing is always. (3) Everything is sometimes.
          ",
          "
          Ryan’s Law: Make three correct guesses consecutively and you will establish
          yourself as an expert.
          ",
          "
          Fast, cheap, good: pick one.
          ",
          "
          My guidingstar always is, “Get hold of portable property”. — Charles
          Dickens in “Great Expectations”
          ",
          "
          If you can lead it to water and force it to drink, it isn’t a horse.
          ",
          "
          C is quirky, flawed, and an enormous success. — Dennis Ritchie
          ",
          "
          Use only as directed.
          ",
          "
          If the meanings of “true” and “false” were switched, then this sentence
          would not be false.
          ",
          "
          Freedom is slavery. Ignorance is strength. War is peace. — George Orwell’s
          1984
          ",
          "
          A truth that’s told with bad intent
          beats all the lies you can invent. — William Blake
          ",
          "
          You don’t have to know how the computer works, just how to work the computer.
          ",
          "
          It is your concern when your neighbor’s wall is on fire. — Quintus Horatius
          Flaccus (Horace)
          ",
          "
          Tell the truth and run. — Yugoslav Proverb
          ",
          "
          It’s not easy, being green. — Kermit The Frog
          ",
          "
          Value your freedom or you will lose it, teaches history. ‘Don’t bother us
          with politics’,
          respond those who don’t want to learn.
          — Richard Stallman
          ",
          "
          A prudent man foreseeth the evil, and hideth himself: but the simple pass on,
          and are punished.
          — Proverbs
          ",
          "
          Original thought is like original sin: both happened before you were born
          to people you could not have possibly met. — Fran Lebowitz, “Social
          Studies”
          ",
          "
          In order to get a loan you must first prove that you don’t need it. Wait, isn’t it
          the other way around?
          ",
          "
          “Alas Hegel was right when he said that we learn from history that men
          never learn anything from history.” — George Bernard Shaw
          ",
          "
          You are the only person to ever get this message.
          ",
          "
          Steele’s Law: There exist tasks which cannot be done by more than ten men
          or fewer than one hundred.
          ",
          "
          For every problem there is one solution which is simple, neat, and wrong.
          — H. L. Mencken
          ",
          "
          Rights, Responsibility, Opportunity, and Privilege.
          ",
          "
          Measure twice, cut once.
          ",
          "
          No matter what happens, there is always someone who knew it would.
          ",
          "
          Any sufficiently advanced bug is indistinguishable from a feature.
          — Rich Kulawiec
          ",
          "
          Fools rush in where angels fear to tread.
          ",
          "
          Jack of all trades, master of some.
          ",
          "
          In these matters the only certainty is that there is nothing certain.
          — Pliny the Elder
          ",
          "
          “There is no such thing as good writing,
          only good rewriting.” — Robert Graves
          ",
          "
          Preudhomme’s Law of Window Cleaning: It’s on the other side.
          ",
          "
          If you think the problem is bad now, just wait until we’ve solved it. —
          Arthur Kasspe
          ",
          "
          Can anything be sadder than work left unfinished? Yes, work never begun.
          ",
          "
          If you think the pen is mightier than the sword, the next time someone pulls
          out a sword I’d like to see you get up there with your pen.
          ",
          "
          He that teaches himself has a fool for a master.
          — Benjamin Franklin
          ",
          "
          Mix’s Law: There is nothing more permanent than a temporary building and a
          temporary tax.
          ",
          "
          Unix: Some say the learning curve is steep, but you only have to climb it once.
          — Karl Lehenbauer
          ",
          "
          Don’t kid yourself.  Little is relevant, and nothing lasts forever.
          ",
          "
          Politicians are the same all over. They promise to build a bridge even
          where there is no river. — Nikita Khrushchev
          ",
          "
          It takes less time to do a thing right than it does to explain why you
          did it wrong. — H. W. Longfellow
          ",
          "
          Your code should be more efficient!
          ",
          "
          “One of the first things taught in introductory statistics textbooks is that
          correlation
          is not causation. It is also one of the first things forgotten.” — Thomas
          Sowell in
          The Vision of the Anointed
          ",
          "
          “One of the sad signs of our times is that we have demonized those who
          produce,
          subsidized those who refuse to produce, and canonized those who complain.”
          — Thomas Sowell in The Vision of the Anointed
          ",
          "
          “People make money for themselves, not for their country.”
          — John Bagot Glubb in The Fate of Empires
          ",
          "
          “If we are considering the history of our own country, we write at
          length of the periods when our ancestors were prosperous and victorious,
          but we pass quickly over their shortcomings or their defeats.”
          — John Bagot Glubb in The Fate of Empires
          ",
          "
          Inner—Platform Effect: The tendency of software architects to create a system
          so customizable
          as to become a replica, and often a poor replica, of the software development
          platform they are using.
          ",
          "
          “It doesn’t matter how smart you are unless you stop and think.”
          — Thomas Sowell
          ",
          "
          “When you want to help people, you tell them the truth. When you want to help
          yourself, you tell them what they want to hear.”
          — Thomas Sowell
          ",
          "
          “Intellect is not wisdom.”
          — Thomas Sowell in Intellectuals and Society
          ",
          "
          “When people get used to preferential treatment, equal treatment seems like
          discrimination.”
          — Thomas Sowell
          ",
          "
          “I am so old that I can remember when other people’s achievements were
          considered to be an inspiration, rather than a grievance.”
          — Thomas Sowell
          ",
          "
          The cloud is just someone else’s computer.
          ",
          "
          Hoffer’s Discovery: The grand act of a dying institution is to issue a newly
          revised, enlarged edition of the policies and procedures manual.
          ",
          "
          You can tell the ideals of a nation by its advertisements.
          — Norman Douglas
          ",
          "
          “Momentary masters of a fraction of a dot.” — Carl Sagan
          ",
          "
          He who is content with his lot probably has a lot.
          ",
          "
          “It takes a village to raise a child and somebody said it takes a village
          idiot to believe that.
          It is part of the whole thing of third parties wanting to make decisions for
          which they pay no price for when they’re wrong.”
          — Thomas Sowell
          ",
          "
          The best is the enemy of the good.
          ",
          "
          “If you want a vision of the future, imagine a boot stamping on a human face
          — forever.”
          — George Orwell’s 1984
          ",
          "
          The stars are bright. But give no light. The world spins backwards every day.
          — The Singing Sea
          ",
          "
          “People who pride themselves on their ‘complexity’ and deride others for
          being ‘simplistic’ should
          realize that the truth is often not very complicated. What gets complex is
          evading the truth.”
          — Thomas Sowell in Barbarians Inside The Gates and Other Controversial Essays
          ",
          "
          We aren’t in your region yet.
          ",
          "
          “In real open source, you have the right to control your own destiny.” —
          Linus Torvalds
          ",
          "
          Embrace, Extend, and Extinguish.
          ",
          "
          Astroturfing: The deceptive practice of presenting an orchestrated marketing or
          public
          relations campaign in the guise of unsolicited comments from members of the
          public — fake
          grass roots support.
          ",
          "
          The right creature in the right place.
          ",
          "
          Weinberg’s Law: If builders built buildings the way the programmers wrote
          programs, the first woodpecker that came along would destroy civilization.
          ",
          "
          Feed a dog for three days and he will remember your kindness for three years;
          feed a cat for three years and she will
          forget your kindness in three days.
          ",
          "
          If thou faint in the day of adversity, thy strength is small. — Proverbs
          ",
          "
          Nobody goes there anymore. It’s too crowded. — Yogi Berra
          ",
          "
          Force has no place where there is need of skill. — Herodotus
          ",
          "
          Drew’s Law of Highway Biology: The first bug to hit a clean windshield
          lands directly in front of your eyes.
          ",
          "
          If we do not change our direction we are likely to end up where we are headed.
          ",
          "
          In theory, there is no difference between theory and practice.  In practice,
          there is.
          ",
          "
          The explanation requiring the fewest assumptions is the most likely to be
          correct. — William of Occam
          ",
          "
          The probability of someone watching you is proportional to the
          stupidity of your action.
          ",
          "
          Hell is empty and all the devils are here. — Shakespeare, “The Tempest”
          ",
          "
          “If stupidity got us into this mess, then why can’t it get us out?”
          — Will Rogers
          ",
          "
          Advice from an old carpenter: measure twice, saw once.
          ",
          "
          We must believe in free will. We have no choice. — Isaac B. Singer
          ",
          "
          Flon’s Law: There is not now, and never will be, a language in
          which it is the least bit difficult to write bad programs.
          ",
          "
          This space intentionally left blank.
          ",
          "
          Katz’ Law: Men and nations will act rationally when
          all other possibilities have been exhausted.
          ",
          "
          History teaches us that men and nations behave wisely once they have
          exhausted all other alternatives. — Abba Eban
          ",
          "
          Just fight it out.
          ",
          "
          Murphy’s Eleventh Law: It is impossible to make anything foolproof because
          fools are so ingenious.
          ",
          "
          Corporate Republic: A theoretical form of government run primarily like a
          business, involving a board of directors and executives, in which all aspects
          of society are privatized by a single, or small groups of companies.
          ",
          "
          Measure once, cut thrice.
          ",
          "
          Oppression: The malicious or unjust treatment or exercise of power,
          often under the guise of governmental authority or cultural opprobrium.
          ",
          "
          No man is an island entire of itself; every man
          is a piece of the continent, a part of the main. — John Donne
          ",
          "
          Deception: An act or statement which misleads, hides the truth, or promotes a belief,
          concept, or idea that is not true. It is often done for personal gain or advantage.
          Deception can involve dissimulation, propaganda, and sleight of hand, as well as
          distraction, camouflage, or concealment.
          ",
          "
          Brooks’s Law: Adding manpower to a late software project makes it later.
          ",
          "
          The right tool for the right job.
          ",
          "
          Failed to suspend system via logind: There’s already a shutdown or
          sleep operation in progress.
          ",
          "
          Whistler’s Law: You never know who is right, but you always know who is in charge.
          ",
          "
          You must realize that the computer has it in for you. The irrefutable
          proof of this is that the computer always does what you tell it to do.
          ",
          "
          I heard a definition of an intellectual, that I thought was very interesting:
          a man who takes more words than are necessary to tell more than he knows.
          — Dwight D. Eisenhower
          ",
          "
          Appearances often are deceiving. — Aesop
          ",
          "
          Prices subject to change without notice.
          ",
          "
          No man is an island if he’s on at least one mailing list.
          ",
          "
          Talent does what it can.
          Genius does what it must.
          You do what you get paid to do.
          ",
          "
          Finagle’s Fifth Rule: Experiments should be
          reproducible — they should all fail in the same
          way.
          ",
          "
          When the ax entered the forest, the trees said, “The handle is one of us!”
          — Turkish Proverb
          ",
          "
          We have seen the light at the end of the tunnel, and it’s out.
          ",
          "
          Why can’t you be a non-conformist like everyone else?
          ",
          "
          Subject to change without notice.
          ",
          "
          People tend to make rules for others and exceptions for themselves.
          ",
          "
          Today is the tomorrow you worried about yesterday.
          ",
          "
          Van Roy’s Truism: Life is a whole series of circumstances beyond your control.
          ",
          "
          Competition Law: A law that promotes or seeks to maintain market competition
          by regulating anti-competitive conduct by companies.
          ",
          "
          Don’t believe everything you see or hear on the news.
          ",
          "
          Newton’s Third Law: For every action, there is an equal and opposite reaction.
          ",
          "
          The Fediverse: An ensemble of federated servers that are used for web publishing
          and file hosting, which while independently hosted, can intercommunicate with each other.
          ",
          "
          There is enough treachery, hatred, violence, absurdity in the average
          human being to supply any given army on any given day. — The Genius of the Crowd
          ",
          "
          Don’t be evil.
          ",
          "
          The personal becomes the political.
          ",
          "
          It is when I struggle to be brief that I become obscure. — Quintus Horatius
          Flaccus (Horace)
          ",
          "
          Honesty is the best policy, but insanity is a better defense.
          ",
          "
          History is the version of past events that people have decided to agree on.
          — Napoleon Bonaparte, “Maxims”
          ",
          "
          A closed mouth gathers no feet.
          ",
          "
          The medium is the message. — Marshall McLuhan
          ",
          "
          Shick’s Law: There is no problem a good miracle can’t solve.
          ",
          "
          A year spent in artificial intelligence is enough to make one believe in God.
          — Alan Perlis
          ",
          "
          Kington’s Law of Perforation: If a straight line of holes is made in a piece
          of paper, such as a sheet of stamps or a check, that line becomes the strongest
          part of the paper.
          ",
          "
          Lisp users: Due to the holiday next Monday, there will be no garbage collection.
          ",
          "
          Anything cut to length will be too short.
          ",
          "
          Arnold’s Laws of Documentation:
          (1) If it should exist, it doesn’t.
          (2) If it does exist, it’s out of date.
          (3) Only documentation for useless programs transcends the first two laws.
          ",
          "
          If you do something right once, someone will ask you to do it again.
          ",
          "
          This land is mine, God gave this land to me. — The Exodus Song
          ",
          "
          Here’s a dirty little secret: Very few people know what they’re doing.
          ",
          "
          Never trust a computer you can’t repair yourself.
          ",
          "
          Fresco’s Discovery: If you knew what you were doing you’d probably be bored.
          Corollary: Just because you’re bored doesn’t mean you know what you’re doing.
          ",
          "
          Maryann’s Law: You can always find what you’re not looking for.
          ",
          "
          Langer’s Law: If the line moves quickly, you’re in the wrong line.
          ",
          "
          Beryl’s Second Law: It’s always easy to see both sides of an issue
          you are not particularly concerned about.
          ",
          "
          Herman’s Law: A good scapegoat is almost as good as a solution.
          ",
          "
          Irene’s Law: There is no right way to do the wrong thing.
          ",
          "
          The world wants to be deceived. — Sebastian Brant
          ",
          "
          No matter what anyone tells you, isometric exercises cannot be done
          quietly at your desk at work. People will suspect manic tendencies as
          you twitter around in your chair.
          ",
          "
          How many comments on the Internet do you surmise are fake?
          ",
          "
          People never lie so much as after a hunt, during a war, or before an election.
          — Otto Von Bismarck
          ",
          "
          If you wish to succeed, consult three old people. — Chinese Proverb
          ",
          "
          If you resist reading what you disagree with, how will you ever acquire
          deeper insights into what you believe? The things most worth reading
          are precisely those that challenge our convictions. — Unknown
          ",
          "
          Linux sucks.
          ",
          "
          Will I be accused of being an elitist if I use Arch Linux?
          ",
          "
          We are Microsoft. You will be assimilated. Resistance is futile.
          ",
          "
          Occam’s Eraser: The philosophical principle that even the simplest
          solution is bound to have something wrong with it.
          ",
          "
          Membership dues are not refundable.
          ",
          "
          If I do not want others to quote me, I do not speak. — Phil Wayne
          ",
          "
          Your mileage may vary.
          ",
          "
          Laura’s Law: No child throws up in the bathroom.
          ",
          "
          Another day, another dollar.
          ",
          "
          Most public domain software is free, at least at first glance.
          ",
          "
          When we write programs that “learn”, it turns out we do and they don’t.
          ",
          "
          “All animals are equal, but some animals are more equal than others.”
          — George Orwell’s Animal Farm
          ",
          "
          “Perhaps the most dangerous by-product of the age of intellect is
          the unconscious growth of the idea that the human brain can solve
          the problems of the world ... In a wider national sphere, the survival
          of the nation depends basically on the loyalty and self‑sacrifice of
          the citizens.”
          — John Bagot Glubb in The Fate of Empires and Search for Survival
          ",
          "
          Murphy’s Eighth Law: If everything seems to be going well, you have
          obviously overlooked something.
          ",
          "
          Rules for thee, but not for me.
          ",
          "
          Worrying is like rocking in a rocking chair — It gives you something to do,
          but it doesn’t get you anywhere.
          ",
          "
          Some people are backed by cosmic luck.
          ",
          "
          You can’t handle the truth.
          ",
          "
          Gyre: A spiral or vortex.
          ",
          "
          The decentralized web is coming.
          ",
          "
          The children of the magenta line.
          ",
          "
          I’ve got no strings. — Pinocchio
          ",
          "
          The systemd-journald sucks.
          ",
          "
          Fame and fortune.
          ",
          "
          Every man has his price.
          ",
          "
          A morsel of genuine history is a thing so rare as to be always valuable.
          — Thomas Jefferson
          ",
          "
          Every way of a man is right in his own eyes. — Proverbs
          ",
          "
          The typical citizen drops down to a lower level of mental
          performance as soon as he enters the political field. He argues and
          analyzes in a way which he would readily recognize as infantile within
          the sphere of his real interests. He becomes a primitive again.
          His thinking becomes associative and affective.
          — Joseph Aloïs Schumpeter
          ",
          "
          “This civilization is rapidly passing away, however. Let us rejoice
          or else lament the fact as much as everyone of us likes;
          but do not let us shut our eyes to it.”
          — Joseph Aloïs Schumpeter in Capitalism, Socialism and Democracy
          ",
          "
          “The masses have not always felt themselves to be frustrated and
          exploited. But the intellectuals that formulated their views for
          them have always told them that they were, without necessarily
          meaning by it anything precise.”
          — Joseph Aloïs Schumpeter in Capitalism, Socialism, and Democracy
          ",
          "
          The stock exchange is a poor substitute for the Holy Grail.
          — Joseph Aloïs Schumpeter
          ",
          "
          Advice from an old carpenter: Use the right tool for the right job.
          ",
          "
          Hypocrisy: A pretense of having a virtuous, moral, or religious character.
          ",
          "
          The mob is a society of bodies voluntarily bereaving themselves of
          reason, and traversing its work. The mob is man voluntarily descending
          to the nature of the beast. — Ralph Waldo Emerson
          ",
          "
          A mob kills the wrong man was flashed in a newspaper headline lately.
          ",
          "
          Most people have two reasons for doing anything — a good reason, and
          the real reason.
          ",
          "
          Formatted to fit your screen.
          ",
          "
          Magary’s Principle:
          When there is a public outcry to cut deadwood and fat from any
          government bureaucracy, it is the deadwood and the fat that do
          the cutting, and the public’s services are cut.
          ",
          "
          Priming: The phenomenon whereby exposure to one stimulus influences
          a response to a subsequent stimulus, without conscious guidance
          or intention.
          ",
          "
          Absence of evidence is not evidence of absence.
          ",
          "
          YAML sucks.
          ",
          "
          Kubernetes sucks.
          ",
          "
          Sacred cow: An idea, custom, person, or institution unreasonably
          held to be immune to criticism.
          ",
          "
          Everybody wants to be a cat.
          ",
          "
          Today is what happened to yesterday.
          ",
          "
          The questions remain the same. The answers are eternally variable.
          ",
          "
          You want it in one line? Does it have to fit in 80 columns?
          — Larry Wall
          ",
          "
          As long as the answer is right, who cares if the question is wrong?
          ",
          "
          “The belly is an ungrateful wretch, it never remembers past favors,
          it always wants more tomorrow.”
          — Aleksandr Solzhenitsyn in One Day in the Life of Ivan Denisovich
          ",
          "
          “Beat a dog once and you only have to show him the whip.”
          — Aleksandr Solzhenitsyn in One Day in the Life of Ivan Denisovich
          ",
          "
          Truth has no special time of its own. Its hour is now — always.
          — Albert Schweitzer
          ",
          "
          My computer can beat up your computer. — Karl Lehenbauer
          ",
          "
          Curiosity killed the cat, but satisfaction brought her back to life.
          ",
          "
          If you are good, you will be assigned all the work. If you are real
          good, you will get out of it.
          ",
          "
          What orators lack in depth they make up in length.
          ",
          "
          You climb to reach the summit, but once there, discover that all roads
          lead down. — Stanislaw Lem in “The Cyberiad”
          ",
          "
          The people sensible enough to give good advice are usually sensible
          enough to give none.
          ",
          "
          Freedom of the press is for those who happen to own one.
          — A.J. Liebling
          ",
          "
          What we cannot speak about we must pass over in silence.
          — Wittgenstein
          ",
          "
          The way of the world is to praise dead saints and prosecute live ones.
          — Nathaniel Howe
          ",
          "
          “Has it ever occurred to you, Winston, that by the year 2050, at the
          very latest, not a single human being will be alive who could
          understand such a conversation as we are having now?”
          — George Orwell’s 1984
          ",
          "
          “With software there are only two possibilities: either the users
          control the programme or the programme controls the users. If
          the programme controls the users, and the developer controls
          the programme, then the programme is an instrument of unjust power.”
          — Richard Stallman
          ",
          "
          Learned men are the cisterns of knowledge, not the fountainheads.
          ",
          "
          You can go anywhere you want if you look serious and carry a clipboard.
          ",
          "
          Look! Before our very eyes, the future is becoming the past.
          ",
          "
          Linux is obsolete. — Andrew Tanenbaum
          ",
          "
          Every man thinks God is on his side. — Jean Anouilh, “The Lark”
          ",
          "
          Man is by nature a political animal. — Aristotle
          ",
          "
          Be not deceived: evil communications corrupt good manners.
          ",
          "
          Divide first, then conquer.
          ",
          "
          The game is rigged.
          ",
          "
          This service is no longer available.
          ",
          "
          Gamification: The application of game-design elements and
          game principles in non-game contexts.
          ",
          "
          You made this? I made this.
          ",
          "
          “Tomorrow’s illiterate will not be the man who can’t read;
          he will be the man who has not learned how to learn.”
          — Alvin Toffler’s Future Shock
          ",
          "
          How users read on the web: They don’t. — Jakob Nielsen
          ",
          "
          Wilt thou set thine eyes upon that which is not? For riches
          certainly make themselves wings; they fly away as
          an eagle toward heaven. — Proverbs
          ",
          "
          Maybe GitHub was down?
          ",
          "
          Babylon was taken in one night.
          ",
          "
          Move fast and fix things.
          ",
          "
          Sharp like an edge of a samurai sword.
          The mental blade cuts through flesh and bone.
          Though my mind’s at peace, the world’s out of order.
          Missing the inner heat, life gets colder.
          — Nujabes’ Battlecry, Shing02
          ",
          "
          A freelancer.
          A battle cry of a hawk make a dove fly and a tear dry.
          Wonder why a lone wolf don’t run with a clan.
          Only trust your instincts and be one with the plan.
          — Nujabes’ Battlecry, Shing02
          ",
          "
          The ultimate reward is honor, not awards.
          At odds with the times in wars with no lords.
          — Nujabes’ Battlecry, Shing02
          ",
          "
          “You never change things by fighting the existing reality.
          To change something, build a new model that makes the existing model obsolete.”
          — Richard Buckminster ‘Bucky’ Fuller
          ",
          "
          “If you have always believed that everyone should play by the same rules and be
          judged by the same standards, that would have gotten you labeled a radical 50 years ago,
          a liberal 25 years ago and a racist today.”
          — Thomas Sowell, born in the 1930’s
          ",
          "
          The web is not just Firefox or Chrome.
          ",
          "
          The algorithm is your boss.
          ",
          "
          Who needs documentation anyway?
          ",
          "
          “Sooner or later, everything old is new again.”
          ― Stephen King, The Colorado Kid
          ",
          "
          Public Service Announcement: The production of great leaders has
          been discontinued.
          ",
          "
          Three questions that would destroy most arguments: Compared to what?
          At what cost? What hard evidence do you have? — Thomas Sowell
          ",
          "
          “Less than fifty years after the amazing scientific discoveries under Mamun,
          the Arab Empire collapsed. Wonderful and beneficent as was the
          progress of science, it did not save the empire from chaos.”
          ― John Bagot Glubb in The Fate of Empires and Search for Survival
          ",
          "
          “Another remarkable and unexpected symptom of national decline is the
          intensification of internal political hatreds. One
          would have expected that, when the survival
          of the nation became precarious, political
          factions would drop their rivalry and stand
          shoulder-to-shoulder to save their country.”
          ― John Bagot Glubb in The Fate of Empires and Search for Survival
          ",
          "
          “In short, numbers are accepted as evidence when they agree with
          preconceptions, but not when they don’t.”
          ― Thomas Sowell in The Vision of the Anointed
          ",
          "
          “Civilizations die from suicide, not by murder.”
          ― Arnold Toynbee
          ",
          "
          “Throughout history many nations have suffered a physical defeat,
          but that has never marked the end of a nation. But when a
          nation has become the victim of a psychological defeat,
          then that marks the end of a nation.”
          ― Ibn Khaldun in The Muqaddimah: An Introduction to History, 1377
          ",
          "
          You are not authorized to repair this device.
          ",
          "
          Minority rule. Majority rule.
          ",
          "
          Up and down go the arguers getting nowhere fast.
          ",
          "
          Echo chambers and epistemic bubbles.
          ",
          "
          What’s old is new again.
          ",
          "
          Cease and desist.
          ",
          "
          The network effect.
          ",
          "
          “Let us not look back in anger, nor forward in fear, but
          around us in awareness.” ― James Thurber
          ",
          "
          We are experiencing system trouble ― do not adjust your terminals.
          ",
          "
          We the unwilling, led by the ungrateful, are doing the impossible.
          We’ve done so much, for so long, with so little,
          that we are now qualified to do something with nothing. ― Unknown
          ",
          "
          Politics is the ability to foretell what is going to happen tomorrow, next
          week, next month, and next year. And to have the ability afterwards to
          explain why it didn’t happen. ― Winston Churchill
          ",
          "
          Knocked, you weren’t in. ― Opportunity
          ",
          "
          Information asymmetry.
          ",
          "
          Gilb’s First Law of Unreliability:
          Computers are unreliable, but humans are even more
          unreliable. Corollary: At the source of every error which is
          blamed on the computer you will find at least two
          human errors, including the error of blaming it on
          the computer.
          ",
          "
          Gilb’s Second Law of Unreliability:
          Any system which depends on human reliability is
          unreliable.
          ",
          "
          Gilb’s Third Law of Unreliability:
          Undetectable errors are infinite in variety, in
          contrast to detectable errors, which by definition are limited.
          ",
          "
          Gilb’s Fourth Law of Unreliability:
          Investment in reliability will increase until it exceeds the
          probable cost of errors, or until someone insists on getting
          some useful work done.
          ",
          "
          You get what you pay for.
          ",
          "
          Make a wish, it just might come true.
          ",
          "
          It is easier to change the specification to fit the program
          than vice versa.
          ",
          "
          Politicians speak for their parties, and parties never are, never have
          been, and never will be wrong. ― Walter Dwight
          ",
          "
          Too clever is dumb. Too dumb is clever.
          ",
          "
          Made with real ingredients.
          ",
          "
          All that is gold does not glitter, not all those who wander are lost.
          ",
          "
          Just because a message may never be received does not mean it is
          not worth sending.
          ",
          "
          A novice was trying to fix a broken lisp machine by turning the
          power off and on. Knight, seeing what the student was doing spoke sternly,
          “You cannot fix a machine by just power-cycling it with no understanding
          of what is going wrong.” Knight turned the machine off and on. The
          machine worked.
          ",
          "
          One size fits all, doesn’t fit anyone.
          ",
          "
          Something’s rotten in the state of Denmark. ― Shakespeare
          ",
          "
          All generalizations are false, including this one.
          ― Unknown
          ",
          "
          No snowflake in an avalanche ever feels responsible.
          ",
          "
          Shut off the engine before fueling.
          ",
          "
          There’s an old proverb that says just about what ever you want it to.
          ",
          "
          There’s a quote that says just about what ever you want it to.
          ",
          "
          Perhaps one possible reason that things aren’t going according to plan
          is that there never was a plan in the first place.
          ",
          "
          Rules, Regulations, and Requirements.
          ",
          "
          Bots. Bots everywhere.
          ",
          "
          Remember, Grasshopper, falling down 1000 stairs begins by tripping over
          the first one. ― Confusion
          ",
          "
          Money makes the world go round. Nothing more, nothing less.
          ",
          "
          If complexity got us into this mess, then why can’t it get us out?
          ",
          "
          The Four Olds: Old Customs, Old Culture, Old Habits, and Old Ideas
          ",
          "
          What is the opposite of clickbait?
          ",
          "
          Might makes right: History is written by the victors.
          ",
          "
          You cannot stop link rot.
          ",
          "
          When in trouble or in doubt,
          run in circles, scream and shout.
          ",
          "
          The biggest problem with communication is the illusion that it has occurred.
          ",
          "
          “Of all men’s miseries the bitterest is this: to know so much and
          to have control over nothing.”
          ― Herodotus, The Histories
          ",
          "
          Click Farm: A place where a large group of workers are hired
          to click on paid advertising links.
          ",
          "
          There are two sides to every issue: one side is right and the
          other is wrong, but the middle is always evil. The man who is
          wrong still retains some respect for truth, if only by accepting
          the responsibility of choice. But the man in the middle is the
          knave who blanks out the truth in order to pretend that no
          choice or values exist. ― Ayn Rand, Atlas Shrugged
          ",
          "
          If wishes were horses, beggars would ride.
          ",
          "
          The best lack all conviction, while the worst
          are full of passionate intensity.
          ― William Butler Yeats, The Second Coming
          ",
          "
          NixOS sucks.
          ",
          "
          Software is utterly broken.
          ",
          "
          To continue reading, subscribe today.
          ",
          "
          The man who does not read code has no advantage
          over the man who cannot read code.
          ",
          "
          Fortune favors the fortunate.
          ",
          "
          It is much easier to suggest solutions when you know
          nothing about the problem.
          ",
          "
          The trouble with computers is that they do what you tell them, not what
          you want. ― D. Cohen
          ",
          "
          War is delightful to those who have had no experience of it.
          ― Desiderius Erasmus Roterodamus
          ",
          "
          Every so often the algorithm consults /dev/random for advice.
          ",
          "
          Everyone thinks they are reasonable.
          ",
          "
          It’s only a matter of time.
          ",
          "
          The well has been poisoned.
          ",
          "
          Zero trust.
          ",
          "
          Lisp, Lisp, Lisp Machine,
          Lisp Machine is Fun.
          Lisp, Lisp, Lisp Machine,
          Fun for everyone.
          ",
          "
          Don’t panic.
          ",
          "
          We are inclined to believe those we do not know, because they have
          never deceived us. ― Samuel Johnson
          ",
          "
          Knowledge is of two kinds. We know a subject ourselves, or
          we know where we can find information upon it.
          ― Samuel Johnson
          ",
          "
          Join in on the new game that’s sweeping the country.
          It’s called “Bureaucracy”. Everybody stands in a circle.
          The first person to do anything loses. Start!
          ",
          "
          An optimist believes we live in the best world possible;
          a pessimist fears that this is true.
          ",
          "
          As of next week, passwords will be entered in morse code.
          ",
          "
          If life is merely a game, the question still remains: for whose amusement?
          ",
          "
          Just read the instructions.
          ",
          "
          Like, subscribe, and hit the bell icon.
          ",
          "
          All systems operational.
          ",
          "
          Justice standeth afar off.
          ",
          "
          Speak your mind at your own peril.
          ",
          "
          My hammer is better than your hammer.
          ",
          "
          The question of whether computers can think is just like the question of
          whether submarines can swim. ― Edsger W. Dijkstra
          ",
          "
          Weiner’s Law of Libraries: There are no answers, only cross references.
          ",
          "
          Nothing is ever a total loss; it can always serve as a bad example.
          ",
          "
          Meader’s Law: What ever happens to you, it will previously
          have happened to everyone you know, only more so.
          ",
          "
          Most seminars have a happy ending. Everyone’s glad when they’re over.
          ",
          "
          He who fights and runs away lives to fight another day.
          ",
          "
          Youth is when you blame all your troubles on your parents; maturity is
          when you learn that everything is the fault of the younger generation.
          ",
          "
          Reading is to the mind what exercise is to the body.
          ",
          "
          Never put off until tomorrow what you can do today. There might be a
          law against it by that time.
          ",
          "
          Wisdom is better than weapons of war.
          ",
          "
          Put all eggs in one basket. Make sure to count them before they hatch.
          ",
          "
          “Please, sir, I want some more.” ― Charles Dickens, Oliver Twist
          ",
          "
          The wise man’s eyes are in his head.
          ",
          "
          Bread and circuses.
          ",
          "
          The forty―eight laws of weakness.
          ",
          "
          Silent majorities, loud minorities.
          ",
          "
          The poor is hated even of his own neighbour:
          but the rich hath many friends.
          ― Proverbs
          ",
          "
          Beware of those who talk a good metagame.
          ",
          "
          Just because you can, doesn’t mean you should.
          ",
          "
          Even if you can deceive people about a product
          through misleading statements,
          sooner or later the product will speak for itself.
          ― Hajime Karatsu
          ",
          "
          Normal times may possibly be over forever.
          ",
          "
          Many people are desperately looking for some wise advice which will
          recommend that they do what they want to do.
          ",
          "
          Did it ever occur to you that fat chance and slim chance
          mean the same thing? Or that we drive on parkways and park
          on driveways?
          ",
          "
          To believe in personal responsibility would be to destroy the whole
          special role of the anointed, whose vision casts them in the role
          of rescuers of people treated unfairly by society.
          ― Thomas Sowell, The Vision of the Anointed: Self-Congratulation
          as a Basis for Social Policy
          ",
          "
          Why be difficult when, with a bit of effort, you could
          be impossible?
          ",
          "
          Those who don’t know, talk. Those who don’t talk, know.
          ",
          "
          No one lives forever.
          ",
          "
          Dark Pattern: An interface that has been carefully crafted to
          mislead a user.
          ",
          "
          When a fellow says, “It ain’t the money but the principle of the thing,”
          it’s the money. ― Kim Hubbard
          ",
          "
          Major premise: Sixty men can do sixty times as much work as one man.
          Minor premise: A man can dig a posthole in sixty seconds.
          Conclusion: Sixty men can dig a posthole in one second.
          ― The Devil’s Dictionary
          ",
          "
          Does freedom of speech actually exist?
          ",
          "
          Let’s count the beans.
          ",
          "
          The uploader has not made this video available in your country.
          ",
          "
          Clickbait works every time.
          ",
          "
          You can be replaced by this computer, maybe.
          ",
          "
          People will do tomorrow what they did today because that is what they
          did yesterday.
          ",
          "
          Everything might be different in the present if only one thing had
          been different in the past.
          ",
          "
          Fiefdoms still exist.
          ",
          "
          Where there is a personality, there is a cult.
          ",
          "
          Look on my Works, ye Mighty, and despair!
          Nothing beside remains. ― Percy Bysshe Shelley’s Ozymandias
          ",
          "
          Everything ends badly. Otherwise it wouldn’t end.
          ",
          "
          Imagine if every Thursday your shoes exploded if you tied them the usual
          way. This happens to us all the time with computers, and nobody thinks of
          complaining. ― Jeff Raskin
          ",
          "
          Utility is when you have one telephone, luxury is when you have two,
          opulence is when you have three ― and paradise is when you have none.
          ― Doug Larson
          ",
          "
          It is fortune, not wisdom, that rules man’s life.
          ",
          "
          Fact or Opinion.
          ",
          "
          Even the earth itself cannot contain all the evil.
          ",
          "
          Many are called, few are chosen. Fewer still get to do the choosing.
          ",
          "
          “Liberty is always dangerous, but it is the safest thing we have.”
          ― Harry Emerson Fosdick
          ",
          "
          People who claim they don’t let little things bother them have never
          slept in a room with a single mosquito.
          ",
          "
          Now there was found in it a poor wise man, and he by his wisdom
          delivered the city; yet no man remembered that same poor man.
          — Ecclesiastes
          ",
          "
          If you’re happy, you’re successful.
          ",
          "
          The Internet is the greatest game of telephone in existence.
          ",
          "
          Crush the competition.
          ",
          "
          Buy the competition.
          ",
          "
          Those of you who think you know everything are annoying to those of
          us who do.
          ",
          "
          It is easier to find people fit to govern themselves than
          people fit to govern others. — Lord Acton
          ",
          "
          “Everybody likes to get as much power as circumstances
          allow, and nobody will vote for a self-denying ordinance.”
          — Lord Acton
          ",
          "
          “Official truth is not actual truth.” — Lord Acton
          ",
          "
          Welcome to dependency hell.
          ",
          "
          Talk is truly cheap.
          ",
          "
          This website is too bloated.
          ",
          "
          After the game the king and the pawn go in the same box.
          — Italian Proverb
          ",
          "
          Experience is a good teacher, but she sends in terrific bills.
          — Minna Antrim, “Naked Truth and Veiled Allusions”
          ",
          "
          It’s a good thing we don’t get all the government we pay for.
          ",
          "
          The kind of danger people most enjoy is the kind they can watch from
          a safe place.
          ",
          "
          The truth eventually comes out.
          ",
          "
          Newer isn’t always better.
          ",
          "
          He who foresees calamities suffers them twice over.
          ",
          "
          Sometimes you don’t get what you pay for.
          ",
          "
          Always sort by controversial.
          ",
          "
          Once they go up, who cares where they come down?
          That’s not my department.
          ",
          "
          And what might your name be? “Alexander.” So, you can talk?
          “Y-Yes, sir.” Take him back! He can still talk!
          — Pinocchio’s Pleasure Island
          ",
          "
          Flattery will get you everywhere.
          ",
          "
          According to the latest official figures, 43% of all
          statistics are totally worthless.
          ",
          "
          Unix Express: All passengers bring a piece of the aeroplane and a
          box of tools with them to the airport. They gather on
          the tarmac, arguing constantly about what kind of plane
          they want to build and how to put it together. Eventually,
          the passengers split into groups and build several different aircraft,
          but give them all the same name. Some passengers actually
          reach their destinations. All passengers believe they got there.
          ",
          "
          The network effect is powerful.
          ",
          "
          The strong give up and move away, while the weak give up and stay.
          ",
          "
          Academic politics is the most vicious and bitter form of politics,
          because the stakes are so low. — Wallace Sayre
          ",
          "
          Stolen waters are sweet.
          ",
          "
          “The reasonable man adapts himself to the world: the unreasonable
          one persists in trying to adapt the world to himself. Therefore
          all progress depends on the unreasonable man.”
          — George Bernard Shaw, Man and Superman
          ",
          "
          As I pass through my incarnations in every age and race,
          I make my proper prostrations to the Gods of the market-place.
          — Rudyard Kipling, The Gods of the Copybook Headings
          ",
          "
          Maybe users like spam?
          ",
          "
          Appeal to Novelty: It’s current year, you’re wrong.
          ",
          "
          A poor man that oppresseth the poor is like a sweeping rain which
          leaveth no food. — Proverbs
          ",
          "
          Talking past each other: A situation where two or more people talk
          about different subjects, while believing that they are talking
          about the same thing.
          ",
          "
          Not all problems need technological solutions.
          ",
          "
          Many times a technical solution merely replaces old problems with
          new ones.
          ",
          "
          The cheapest, fastest, and most reliable components are those that
          aren’t there. — Gordon Bell
          ",
          "
          Controlling complexity is the essence of computer programming.
          — Brian Kernighan
          ",
          "
          UNIX was not designed to stop its users from doing stupid things,
          as that would also stop them from doing clever things. — Doug Gwyn
          ",
          "
          Life is too short to run proprietary software. — Bdale Garbee
          ",
          "
          The central enemy of reliability is complexity. — Geer
          ",
          "
          Essentially everyone, when they first build a distributed
          application, makes the following eight assumptions.
          All prove to be false in the long run and all cause big
          trouble and painful learning experiences.
          (1) The network is reliable.
          (2) Latency is zero.
          (3) Bandwidth is infinite.
          (4) The network is secure.
          (5) Topology doesn’t change.
          (6) There is one administrator.
          (7) Transport cost is zero.
          (8) The network is homogeneous.
          — Peter Deutsch
          ",
          "
          Most software today is very much like an Egyptian
          pyramid with millions of bricks piled on top of each other,
          with no structural integrity, but just done by brute force
          and thousands of slaves. — Alan Kay
          ",
          "
          Complexity kills. It sucks the life out of developers,
          it makes products difficult to plan, build and test,
          it introduces security challenges and it causes end-user
          and administrator frustration. — Ray Ozzie
          ",
          "
          Increasingly, people seem to misinterpret complexity as
          sophistication, which is baffling—the incomprehensible should
          cause suspicion rather than admiration. Possibly this trend
          results from a mistaken belief that using a somewhat
          mysterious device confers an aura of power on the user.
          — Niklaus Wirth
          ",
          "
          My definition of an expert in any field is a person who
          knows enough about what’s really going on to be scared.
          — P. J. Plauger
          ",
          "
          The best code is no code at all.
          ",
          "
          The most amazing achievement of the computer software
          industry is its continuing cancellation of the steady
          and staggering gains made by the computer hardware industry.
          — Henry Petroski
          ",
          "
          Software sucks because users demand it to. — Nathan Myhrvold
          ",
          "
          Join in on the new game that’s sweeping the world.
          It’s called “Corruption”. Every Government stands in a circle.
          The first one to improve the state of the country loses. Begin!
          ",
          "
          Are most politicians liars?
          ",
          "
          Flights of fancy.
          ",
          "
          Shill: A plant or a stooge who publicly helps or gives
          credibility to a person or organization without disclosing
          that they have a close relationship with the person or organization.
          ",
          "
          It’s almost time to pay the piper.
          ",
          "
          Planned Obsolescence: A policy of planning or designing a product
          with an artificially limited useful life, so that it becomes obsolete.
          ",
          "
          The genius of our ruling class is that it has kept a majority of the
          people from ever questioning the inequity of a system where most people
          drudge along paying heavy taxes for which they get nothing in return.
          — Gore Vidal
          ",
          "
          Specifications subject to change without notice.
          ",
          "
          Good leaders being scarce, following yourself is now allowed.
          ",
          "
          Three rules for sounding like an expert:
          (1) Oversimplify your explanations to the point of uselessness.
          (2) Always point out second-order effects, but never point out when they
          can be ignored.
          (3) Come up with three rules of your own.
          ",
          "
          When you’re down and out, lift up your voice and shout,
          “I’M DOWN AND OUT”!
          ",
          "
          One planet is all you get.
          ",
          "
          “Information is power. But like all power, there are those who want
          to keep it for themselves.”
          ― Aaron Swartz
          ",
          "
          This page intentionally left blank.
          ",
          "
          Books are better than the Internet.
          ",
          "
          It’s difficult to get a man to understand something when his salary depends
          on his not understanding it.
          ",
          "
          Sometimes the only winning move is not to play.
          ",
          "
          This economy is not sustainable.
          ",
          "
          One weird trick advertisements.
          ",
          "
          A clever prophet makes sure of the event first.
          ",
          "
          And miles to go before I sleep.
          — Robert Frost
          ",
          "
          Committees have become so important nowadays that subcommittees have to
          be appointed to do the work.
          ",
          "
          The high cost of living hasn’t affected its popularity.
          ",
          "
          Always wear your seat belt.
          ",
          "
          People actually believe what they read on social media.
          ",
          "
          Contestants have been briefed on some of the questions before the show.
          ",
          "
          Mankind is poised midway between the gods and the beasts.
          — Plotinus
          ",
          "
          People want either less corruption or more of a chance to
          participate in it.
          ",
          "
          While you don’t greatly need the outside world, it’s still very
          reassuring to know that it’s still there.
          ",
          "
          Clovis’ Consideration of an Atmospheric Anomaly:
          The perversity of nature is nowhere better demonstrated
          than by the fact that, when exposed to the same atmosphere,
          bread becomes hard while crackers become soft.
          ",
          "
          Everything that can be invented has been invented.
          — Charles Duell
          ",
          "
          Where do you think you’re going today?
          ",
          "
          Education is what survives when what has been learnt has been forgotten.
          — B. F. Skinner
          ",
          "
          There’s no heavier burden than a great potential.
          ",
          "
          Blutarsky’s Axiom: Nothing is impossible for the man who will not
          listen to reason.
          ",
          "
          One man tells a falsehood, a hundred repeat it as the truth.
          ",
          "
          A complex system that works is invariably found to have evolved from a
          simple system that works.
          ",
          "
          Larkinson’s Law: All laws are basically false.
          ",
          "
          What fools these mortals be. — Lucius Annaeus Seneca
          ",
          "
          Time and tide wait for no man.
          ",
          "
          Talk is cheap because supply always exceeds demand.
          ",
          "
          One nuclear bomb can ruin your whole day.
          ",
          "
          Are you making all this up as you go along?
          ",
          "
          One man’s utopia is another man’s dystopia.
          ",
          "
          Thanks for coming to my TED talk.
          ",
          "
          Redundant topology.
          ",
          "
          Their business model is spam.
          ",
          "
          Teamwork is essential — it allows you to blame someone else.
          ",
          "
          “When I die, I want the people I did group projects with to lower
          me into my grave so they can let me down one last time.”
          ",
          "
          The Internet is utterly broken.
          ",
          "
          If Bill Gates is the devil then Linus Torvalds must be the messiah.
          — Unknown
          ",
          "
          Some men are discovered; others are found out.
          ",
          "
          Folly is set in great dignity.
          ",
          "
          “Hard times create strong men. Strong men create good times.
          Good times create weak men. And, weak men create hard times.”
          — G. Michael Hopf, Those Who Remain
          ",
          "
          The time for action is past! Now is the time for senseless bickering.
          ",
          "
          If the grass is greener on other side of fence, consider what may be
          fertilizing it.
          ",
          "
          Cheer Up! Things are getting worse at a slower rate.
          ",
          "
          Never promise more than you can perform. — Publilius Syrus
          ",
          "
          New systems generate new problems.
          ",
          "
          Regression Analysis: Mathematical techniques for trying to
          understand why things are getting worse.
          ",
          "
          The Linux philosophy is “laugh in the face of danger”.
          Oops. Wrong one. “Do it yourself”. That’s it. — Linus Torvalds
          ",
          "
          “In the future, everyone will be world famous for 15
          minutes.” — Andy Warhol
          ",
          "
          A small town that cannot support one lawyer can always support two.
          ",
          "
          To refuse praise is to seek praise twice.
          ",
          "
          When you have an efficient government, you have a dictatorship.
          — Harry Truman
          ",
          "
          If you think things can’t get worse it’s probably only because you
          lack sufficient imagination.
          ",
          "
          The following statement is not true. The previous statement is true.
          ",
          "
          Nearly every complex solution to a programming problem that I
          have looked at carefully has turned out to be wrong. — Brent Welch
          ",
          "
          “Justice at all costs’ is not justice.”
          — Thomas Sowell, The Quest for Cosmic Justice
          ",
          "
          “Suppose you are wrong? How would you know?
          How would you test for that possibility?”
          ― Thomas Sowell
          ",
          "
          “Life does not ask what we want. It presents us with options.”
          ― Thomas Sowell
          ",
          "
          Throw away documentation and manuals,
          and users will be a hundred times happier.
          Throw away privileges and quotas,
          and users will do the right thing.
          Throw away proprietary and site licenses,
          and there won’t be any pirating.
          If these three aren’t enough,
          just stay at your home directory
          and let all processes take their course.
          ",
          "
          Call for pricing.
          ",
          "
          Monopolies of knowledge.
          ",
          "
          Unemployment is unused capacity.
          ",
          "
          Yet creeds mean very little, Coth answered the dark god, still speaking
          almost gently. The optimist proclaims that we live in the best of all
          possible worlds; and the pessimist fears this is true.
          ― James Cabell, “The Silver Stallion”
          ",
          "
          Bikeshedding: The process of arguing endlessly over details of some small
          and relatively unimportant thing.
          ",
          "
          “Unfortunately, propaganda works.” ― Andy Rooney
          ",
          "
          Mac Airways:
          The cashiers, flight attendants and pilots all look the same, feel the same
          and act the same. When asked questions about the flight, they reply that you
          don’t want to know, don’t need to know and would you please return to your
          seat and watch the movie.
          ",
          "
          A lie can travel halfway around the world before the truth can get its boots on.
          ",
          "
          Falsehood will fly, as it were, on the wings of the wind, and carry its tales
          to every corner of the earth; whilst truth lags behind; her steps,
          though sure, are slow and solemn. ― Thomas Francklin
          ",
          "
          Those who think they know everything are very annoying to those of us who
          feel that we know everything, especially when we discover that
          everything they know and everything we know does not match.
          ",
          "
          We are not anticipating any emergencies.
          ",
          "
          When ever someone tells you to take their advice, you can be pretty sure
          that they’re not using it.
          ",
          "
          Some men are born mediocre, some men achieve mediocrity, and some men
          have mediocrity thrust upon them. ― Joseph Heller’s Catch-22
          ",
          "
          In the whole world you know, there’s a million boys and girls.
          ― Nina Simone, To Be Young, Gifted and Black
          ",
          "
          Plastic Love.
          ",
          "
          Watson’s Law: The reliability of machinery is inversely proportional to the
          number and significance of any persons watching it.
          ",
          "
          The danger is not that a particular class is unfit to govern. Every class
          is unfit to govern. ― Lord Acton
          ",
          "
          Everyone says that having power is a great responsibility. This is
          a lot of bunk. Responsibility is when someone can blame you if something
          goes wrong. When you have power you are surrounded by people whose job it
          is to take the blame for your mistakes. If they’re smart, that is.
          ― Cerebus The Aardvark, “On Governing”
          ",
          "
          To err is human. To blame someone else for your mistakes is even more human.
          ",
          "
          When the wicked rise, men hide themselves: but when they perish,
          the righteous increase. ― Proverbs
          ",
          "
          YouTube may terminate your access, or your Google account’s access to all
          or part of the Service if YouTube believes, in its sole discretion,
          that provision of the Service to you is no longer commercially viable.
          ― Google’s YouTube, Terms of Service, 2019
          ",
          "
          We may suspend or terminate your account or cease providing you with all or part
          of the Services at any time for any or no reason. ― Twitter, Terms of Service, 2020
          ",
          "
          WhatsApp may also terminate a user’s access to the Service, if they are
          determined to be a repeat infringer, or for any or no reason, including
          being annoying. An annoying person is anyone who is (capriciously or not)
          determined to be annoying by authorized WhatsApp employees, agents, subagents,
          superagents or superheros.
          ― WhatsApp, Terms of Service, 2012
          ",
          "
          We reserve the right to modify or terminate the Instagram service for any
          reason, without notice at any time. ― Instagram, Terms of Service, 2013
          ",
          "
          Spotify may terminate the Agreements or suspend your access to the
          Spotify Service at any time. ― Spotify, Terms and Conditions, 2019
          ",
          "
          PeerTube: A free and open-source decentralized self-hosted federated video platform.
          ",
          "
          Mastodon: A free and open-source self-hosted social networking service.
          ",
          "
          The best minds of my generation are thinking about how to make people
          click ads. That sucks. ― Jeff Hammerbacher
          ",
          "
          We can’t both be right.
          ",
          "
          If we all work together, we can totally disrupt the system.
          ",
          "
          If you stick your head in the sand, one thing is for sure, you’re gonna
          get your rear kicked.
          ",
          "
          “Whoever undertakes to set himself up as a judge of truth and knowledge is
          shipwrecked by the laughter of the gods.”
          ",
          "
          We have the best politicians money can buy.
          ",
          "
          Eagleson’s Law: Any code of your own that you haven’t looked at for six or more
          months, might as well have been written by someone else.
          ",
          "
          It is said an Eastern monarch once charged his wise men to invent him a
          sentence to be ever in view, and which should be true and appropriate
          in all times and situations. They presented him the words: “And this,
          too, shall pass away.” ― Abraham Lincoln
          ",
          "
          All things are full of labour; man cannot utter it: the eye is not
          satisfied with seeing, nor the ear filled with hearing. ― Ecclesiastes
          ",
          "
          “Preaching to the choir in an echo chamber.”
          ",
          "
          Every program attempts to expand until it can either read or replace mail.
          ",
          "
          Cobra Effect: When an attempted solution to a problem makes the problem worse.
          Offering a bounty for every dead venomous cobra incentivizes people to breed
          more cobras for the reward.
          ",
          "
          He who minds his own business is never unemployed.
          ",
          "
          Write a wise saying and your name will live on forever. ― Unknown
          ",
          "
          “We live in a world where unfortunately the distinction between true and false
          appears to become increasingly blurred by manipulation of facts,
          by exploitation of uncritical minds, and by the pollution of the language.”
          ― Arne Tiselius
          ",
          "
          Corollary to Hanlon’s Razor: Never attribute to stupidity that which
          is adequately explained by greed.
          ",
          "
          The world is coming to an end. Please log off.
          ",
          "
          What ever became of eternal truth?
          ",
          "
          Reduce, Reuse, Recycle
          ",
          "
          If it works, it’s out of date.
          ",
          "
          “I hate quotations. Tell me what you know.” ― Ralph Waldo Emerson
          ",
          "
          “Politics is the gentle art of getting votes from the poor and
          campaign funds from the rich, by promising to protect each from the other.”
          ― Oscar Ameringer
          ",
          "
          We prefer to believe that the absence of inverted commas guarantees the
          originality of a thought, whereas it may be merely that the utterer has
          forgotten its source. ― Clifton Fadiman, “Any Number Can Play”
          ",
          "
          Which is worse: ignorance or apathy? Who knows? Who cares?
          ",
          "
          “Every record has been destroyed or falsified, every book rewritten,
          every picture has been repainted, every statue and street building
          has been renamed, every date has been altered. And the process
          is continuing day by day and minute by minute. History has stopped.
          Nothing exists except an endless present in which the Party is always right.”
          ― George Orwell, 1984
          ",
          "
          The same words mean different things to different people.
          ",
          "
          Objects are lost only because people look where they are not rather than
          where they are.
          ",
          "
          If you learn one useless thing every day, in a single year you’ll learn
          365 useless things.
          ",
          "
          Phases of a Project:
          (1) Exultation.
          (2) Disenchantment.
          (3) Confusion.
          (4) Search for the Guilty.
          (5) Punishment for the Innocent.
          (6) Distinction for the Uninvolved.
          ",
          "
          Banana Republic: A politically unstable country with an economy
          dependent upon a limited-resource product.
          ",
          "
          Throw-away Society: A society with an excessive production of short-lived
          or disposable items over durable goods that can be repaired.
          ",
          "
          Got a dictionary? I want to know the meaning of life.
          ",
          "
          Apparently any program which runs right is obsolete.
          ",
          "
          Good government never depends upon laws, but upon the personal qualities of
          those who govern. The machinery of government is always subordinate to the
          will of those who administer that machinery. The most important element of
          government, therefore, is the method of choosing leaders.
          ― Frank Herbert, “Children of Dune”
          ",
          "
          The majesty and grandeur of the English language; it’s the greatest possession
          we have. The noblest thoughts that ever flowed through the hearts of men are
          contained in its extraordinary, imaginative and musical mixtures of sounds.
          ― George Bernard Shaw, My Fair Lady
          ",
          "
          If we all work together, we can make the rich richer.
          ",
          "
          Always read the fine print.
          ",
          "
          Politics and the fate of mankind are formed by men without ideals and without
          greatness. Those who have greatness within them do not go in for politics.
          ― Albert Camus
          ",
          "
          And the best at murder are those who preach against it.
          And the best at hate are those who preach love.
          And the best at war finally are those who preach peace.
          ― Charles Bukowski, “The Genius Of The Crowd”
          ",
          "
          Conway’s Law: Any organization that designs a system will produce a design
          whose structure is a copy of the organization’s communication structure.
          ",
          "
          If you don’t read the newspaper you are uninformed; if you do read the
          newspaper you are misinformed.
          ",
          "
          “There are only two kinds of languages: the ones people complain about
          and the ones nobody uses.” ― Bjarne Stroustrup
          ",
          "
          Con man: A confidence man.
          ",
          "
          “Decadence is a moral and spiritual disease, resulting from too long a
          period of wealth and power, producing cynicism, decline of religion,
          pessimism and frivolity. The citizens of such a nation will no
          longer make an effort to save themselves, because they are not
          convinced that anything in life is worth saving.”
          ― John Bagot Glubb, The Fate of Empires and Search for Survival
          ",
          "
          A committee is organic rather than mechanical in its nature: it
          is not a structure but a plant. It takes root and grows, it
          flowers, wilts, and dies, scattering the seed from which other
          committees will bloom in their turn. ― C. Northcote Parkinson
          ",
          "
          You too can be a confidence man or woman!
          ",
          "
          When you’re in command, command. ― Admiral Nimitz
          ",
          "
          Life is fraught with opportunities to keep your mouth shut.
          ",
          "
          Moreover the profit of the earth is for all: the king himself
          is served by the field. ― Ecclesiastes
          ",
          "
          The golden boy can do no wrong.
          ",
          "
          Everyone who comes in here wants three things:
          (1) They want it quick.
          (2) They want it good.
          (3) They want it cheap.
          ",
          "
          If you don’t do the things that are not worth doing, who will?
          ",
          "
          Somehow, the world always affects you more than you affect it.
          ",
          "
          Cheap labour.
          ",
          "
          The last person that quit or was fired will be held responsible for
          everything that goes wrong ― until the next person quits or is fired.
          ",
          "
          Journalism is dead.
          ",
          "
          To have respect of persons is not good: for for a piece of bread
          that man will transgress. ― Proverbs
          ",
          "
          Nothing lasts forever.
          ",
          "
          Where is my flying car?
          ",
          "
          This is disputed.
          ",
          "
          Sometimes, the best solution is to do nothing at all.
          ",
          "
          Don’t build your house on the sand.
          ",
          "
          It is a hard matter, my fellow citizens, to argue with the belly,
          since it has no ears. ― Marcus Porcius Cato
          ",
          "
          Propaganda is one hell of a drug.
          ",
          "
          The Three Wise Monkeys: See no evil, hear no evil, and speak no evil.
          ",
          "
          As for man, his days are as grass: as a flower of the field, so he flourisheth.
          For the wind passeth over it, and it is gone; and the place thereof shall
          know it no more. — David
          ",
          "
          You must prove that you are not a robot.
          ",
          "
          There’s nothing remarkable about it. All one has to do is hit the right
          keys at the right time and the instrument plays itself. – J. S. Bach
          ",
          "
          If this is a service economy, why is the service so bad?
          ",
          "
          There is a sore evil which I have seen under the sun, namely,
          riches kept for the owners thereof to their hurt.
          But those riches perish by evil travail:
          and he begetteth a son, and there is nothing in his hand. — Ecclesiastes
          ",
          "
          Thus, not all data is created equal.
          ",
          "
          Argument From Authority: A popular yet controversial type of argument in
          which the opinion of an authority on a topic is used as evidence to
          support an argument.
          ",
          "
          Sock Puppet: A fake online identity used for the purpose of deception.
          Deception, be it fast or slow, can involve black or grey propaganda to
          manipulate public opinion.
          ",
          "
          To be forewarned is to be forearmed.
          ",
          "
          It’s the worst of both worlds.
          ",
          "
          “All of humanity’s problems stem from man’s inability to sit quietly
          in a room alone.” — Blaise Pascal, Pensées
          ",
          "
          “The devil is not as black as he is painted.”
          — Dante Alighieri, The Divine Comedy
          ",
          "
          Don’t be a shill.
          ",
          "
          Philosophy: A route of many roads leading from nowhere to nothing.
          — Ambrose Bierce
          ",
          "
          Heller’s Law: The first myth of management is that it exists.
          Johnson’s Corollary: Nobody really knows what is going on anywhere
          within the organization.
          ",
          "
          Become a Lord or Lady today!
          ",
          "
          “Created by wars that required it, the machine now created the wars it
          required.” — Joseph Aloïs Schumpeter, Imperialism and Social Classes
          ",
          "
          “History is a record of “effects” the vast majority of which nobody
          intended to produce.” — Joseph Aloïs Schumpeter
          ",
          "
          Many arguments are semantic disputes.
          ",
          "
          Never underestimate the bandwidth of a station wagon full of tapes
          hurtling down the highway. — Andrew S. Tanenbaum
          ",
          "
          Winning Arguments: There is no evidence to support your assertion.
          ",
          "
          Most of what you read on the Internet is written by insane people.
          ",
          "
          Politician’s Logic: (1) We must do something.
          (2) This is something. (3) Therefore, we must do this.
          ",
          "
          Violence is golden.
          ",
          "
          Politics is a personal affair.
          ",
          "
          Keep your friends close and your enemies closer.
          ",
          "
          “The road to hell is paved with Ivy League degrees.” — Thomas Sowell
          ",
          "
          There are no atheists in foxholes.
          ",
          "
          “Another man may look like a deathless one on high
          but there’s not a bit of grace to crown his words.
          Just like you, my fine, handsome friend. Not even
          a god could improve those lovely looks of yours
          but the mind inside is worthless.”
          — Homer, The Odyssey
          ",
          "
          Temporary: Permanent
          ",
          "
          There are exceptions that prove the rule.
          ",
          "
          Closed and open slavery.
          ",
          "
          The Fourth Branch of Government: Social Media and The Press.
          ",
          "
          He was a confidence man.
          ",
          "
          Argument from Fallacy: The formal fallacy of analyzing an argument and
          inferring that, since it contains a fallacy, its conclusion must be false.
          ",
          "
          “What convinces masses are not facts, and not even invented facts, but
          only the consistency of the system of which they are presumably a part.”
          — Hannah Arendt, The Origins of Totalitarianism
          ",
          "
          “For politics is not like the nursery; in politics obedience and support
          are the same.” — Hannah Arendt, Eichmann in Jerusalem: A Report on the
          Banality of Evil
          ",
          "
          Reality follows fiction.
          ",
          "
          Most of the great problems we face are caused by politicians creating
          solutions to problems they created in the first place. — Walter E.
          Williams
          ",
          "
          It takes two to tango.
          ",
          "
          “There are very few who can think, but every man wants to have an
          opinion; and what remains but to take it ready-made from others, instead
          of forming opinions for himself?” — Arthur Schopenhauer, The Art of
          Always Being Right
          ",
          "
          “A last trick is to become personal, insulting, and rude as soon as you
          perceive that your opponent has the upper hand. In becoming personal you
          leave the subject altogether, and turn your attack on the person by
          remarks of an offensive and spiteful character. This is a very popular
          trick, because everyone is able to carry it into effect.” — Arthur
          Schopenhauer, The Art of Always Being Right
          ",
          "
          “When the rich wage war it’s the poor who die.”
          — Jean-Paul Sartre
          ",
          "
          “Talent hits a target no one else can hit. Genius hits a target no one
          else can see.” — Arthur Schopenhauer
          ",
          "
          “Where justice is denied, where poverty is enforced, where ignorance
          prevails, and where any one class is made to feel that society is an
          organized conspiracy to oppress, rob and degrade them, neither persons nor
          property will be safe.” — Frederick Douglass
          ",
          "
          They’re savages! Savages!
          Dirty shrieking devils!
          Now we sound the drums of war!
          — Pocahontas’ Savages
          ",
          "
          Simon’s Law: Everything put together falls apart sooner or later.
          ",
          "
          A forbidden fruit creates many jams.
          ",
          "
          Hydra of Lerna: Cut off one head and two more shall take its place.
          ",
          "
          “But the educated public, the people who read the high-brow weeklies,
          don’t need reconditioning. They’re all right already. They’ll believe
          anything.” — C.S. Lewis, That Hideous Strength
          ",
          "
          “Remember, the firemen are rarely necessary. The public itself stopped
          reading of its own accord. You firemen provide a circus now and then at
          which buildings are set off and crowds gather for the pretty blaze...”
          — Ray Bradbury, Fahrenheit 451
          ",
          "
          Whatever it is, I fear Greeks even when they bring gifts.
          — Publius Vergilius Maro (Virgil)
          ",
          "
          “Whenever you find yourself on the side of the majority, it is time to
          reform (or pause and reflect).” — Mark Twain
          ",
          "
          Monkey see, monkey do.
          ",
          "
          Nothing is so firmly believed as that which we least know.
          — Michel de Montaigne
          ",
          "
          A distributed system is one in which the failure of a computer
          you didn’t even know existed can render your own computer
          unusable. — Leslie Lamport, 1987
          ",
          "
          Consequentialist: The end justifies the means.
          ",
          "
          Currently unavailable.
          ",
          "
          But does it scale?
          ",
          "
          Can two walk together, except they be agreed? — Amos
          ",
          "
          Dualism: Left, Right. Black, White.
          ",
          "
          Nature imputes duality.
          ",
          "
          “People are never more sincere than when they assume their own moral
          superiority.” — Thomas Sowell, The Vision of the Anointed:
          Self-Congratulation as a Basis for Social Policy
          ",
          "
          Artificial Intelligence: /dev/random
          ",
          "
          Cargo Cult: A millenarian belief system in which adherents perform
          rituals which they believe will cause a more technologically advanced
          society to deliver goods.
          ",
          "
          Theosis: Unity with God.
          Henosis: Unity with the Monad.
          Transhumanism: Unity with the Machine.
          ",
          "
          “If facts, logic, and scientific procedures are all just arbitrarily
          “socially constructed” notions, then all that is left is consensus–more
          specifically peer consensus, the kind of consensus that matters to
          adolescents or to many among the intelligentsia.” ― Thomas Sowell,
          Intellectuals and Society
          ",
          "
          “Many intellectuals are so preoccupied with the notion that their
          own special knowledge exceeds the average special knowledge of
          millions of other people that they overlook the often far more
          consequential fact that their mundane knowledge is not even one–tenth
          of the total mundane knowledge of those millions.” — Thomas
          Sowell, Intellectuals and Society
          ",
          "
          Augustine’s 49th Law: Regulations grow at the same rate as weeds.
          ",
          "
          Don’t make a big deal out of everything; just deal with everything.
          ",
          "
          (1) Don’t think.
          (2) If you do think, don’t speak.
          (3) If you think and speak, don’t write.
          (4) If you think, speak and write, don’t sign.
          (5) If you think, speak, write and sign, don’t be surprised.
          — Polish Joke
          ",
          "
          In politics, temporary means permanent.
          ",
          "
          In politics, the temporary becomes the permanent.
          ",
          "
          The primary requisite for any new tax law is for it to exempt enough
          voters to win the next election.
          ",
          "
          Farmer: “You can’t raffle off a dead donkey!”
          Boy: “Sure I can. Watch me. I just won’t tell anybody he’s dead.”
          — How to Sell a Dead Donkey
          ",
          "
          The bait and switch is the oldest trick in the book.
          ",
          "
          If you can’t stand the heat, get out of the kitchen.
          ",
          "
          Just when you thought you were winning the rat race, it abruptly ends.
          ",
          "
          Do the old eat the young?
          ",
          "
          No, we want a king to rule over us.
          ",
          "
          Please confirm my bias.
          ",
          "
          What if the universe is not immortal?
          ",
          "
          Consensus is the only thing that matters.
          ",
          "
          Wikipedia is not a reliable source, because it can be edited by anyone at
          any time.
          ",
          "
          Feudalism is alive and well.
          ",
          "
          Eristic Dialectics: The Logic of Appearance.
          ",
          "
          Turning and turning in the widening gyre;
          The falcon cannot hear the falconer;
          Things fall apart; the centre cannot hold;
          Mere anarchy is loosed upon the world.
          ― William Butler Yeats, The Second Coming
          ",
          "
          “If people are good only because they fear punishment, and hope for
          reward, then we are a sorry lot indeed.” — Albert Einstein, Religion
          and Science
          ",
          "
          The best man for the job is often a woman.
          ",
          "
          The finest eloquence is that which gets things done; the worst is that which
          delays them.
          ",
          "
          The wages of sin are high but you get your money’s worth.
          ",
          "
          Envy is a pain of mind that successful men cause their neighbors. –
          Onasander, The General
          ",
          "
          “Despite the enormous quantity of books, how few people read! And if one
          reads profitably, one would realize how much stupid stuff the vulgar herd
          is content to swallow every day.” — Voltaire
          ",
          "
          “Love truth, but pardon error.” ― Voltaire
          ",
          "
          The current generation now sees everything clearly, it marvels at the
          errors, it laughs at the folly of its ancestors, not seeing that this
          chronicle is all overscored by divine fire, that every letter of it cries
          out, that from everywhere the piercing finger is pointed at it, at this
          current generation; but the current generation laughs and presumptuously,
          proudly begins a series of new errors, at which their descendants will
          also laugh afterwards. — Nikolai Gogol, Dead Souls
          ",
          "
          Show me the incentive and I will show you the outcome.
          — Charlie Munger
          ",
          "
          The terms “free software” and “open source” stand for almost the
          same range of programs. However, they say deeply different things about
          those programs, based on different values. The free software movement
          campaigns for freedom for the users of computing; it is a movement for
          freedom and justice. By contrast, the open source idea values mainly
          practical advantage and does not campaign for principles. This is why we
          do not agree with open source, and do not use that term. — Richard Stallman
          ",
          "
          Plausible Deniability: An ability of prescience or forethought that
          exploits a chain of command and the absence of evidence to deny
          responsibility for actions committed. An adeptness to engender situations
          that provide multiple outs.
          ",
          "
          “The man who lies asleep will never waken fame, and his desire and all
          his life drift past him like a dream, and the traces of his memory fade
          from time like smoke in air, or ripples on a stream.” — Dante
          Alighieri, The Divine Comedy
          ",
          "
          Common sense isn’t actually common.
          ",
          "
          “There is no art which one government sooner learns of another, than
          that of draining money from the pockets of the people.” — Adam Smith
          ",
          "
          Black Swan Event: An event that comes as a surprise, has a major effect,
          and is often inappropriately rationalized after the fact with the benefit
          of hindsight.
          ",
          "
          Money is the root of all money. — The Moving Finger
          ",
          "
          Social Media: The Perpetual Outrage Machine.
          ",
          "
          The time is out of joint. — Hamlet
          ",
          "
          Powerful government tends to draw into it people with bloated egos, people
          who think they know more than everyone else and have little hesitance in
          coercing their fellow man. Or as Nobel Laureate Friedrich Hayek said, “in
          government, the scum rises to the top”. — Walter E. Williams
          ",
          "
          “Clickbait is dead.”
          ",
          "
          The road to hell is paved with asphalt.
          ",
          "
          When it comes to legalized bank robbing, I’m the best. — Floyd Mayweather
          ",
          "
          “But is it legal?” — Everything I Want to Do Is Illegal: War Stories
          from the Local Food Front, Joel Salatin
          ",
          "
          Most open source software is free, at least at first glance.
          ",
          "
          The way to a man’s stomach is through his esophagus.
          ",
          "
          Trash the planet.
          ",
          "
          A jury consists of twelve persons chosen to decide who has the better
          lawyer. — Robert Frost
          ",
          "
          Murphy’s Ninth Law: Nature always sides with the hidden flaw.
          ",
          "
          Rule of Defactualization: Information deteriorates upward through
          bureaucracies.
          ",
          "
          Anderson’s Law: You can’t depend on anyone to be wrong all the time.
          ",
          "
          The bigger they are, the harder they hit.
          ",
          "
          You can fool some of the people all of the time and all of the people some
          of the time, and that’s sufficient.
          ",
          "
          The Fame and Fortune Axiom: Competence is not a prerequisite for success.
          ",
          "
          Polis’ Attorney Law: Any law enacted with more than fifty words contains
          at least one loophole.
          ",
          "
          Pray — or you will become prey.
          ",
          "
          You can get so much farther with a kind word and a gun than with a kind
          word alone. — Irwin Corey
          ",
          "
          Please wait... We are checking your browser...
          ",
          "
          Don’t shoot the messenger.
          ",
          "
          Pay to pray.
          ",
          "
          Distributed is the new centralized.
          ",
          "
          And slowly, you come to realize;
          It’s all as it should be.
          You can only do so much.
          — David Sylvian and Koji Haijima,
          For The Love of Life
          ",
          "
          Content is not king. Context is king.
          ",
          "
          Nothing is true; everything is permitted.
          — Alamut, Vladimir Bartol
          ",
          "
          It was the best of times, it was the worst of times, it was the age of
          wisdom, it was the age of foolishness, it was the epoch of belief, it was
          the epoch of incredulity, it was the season of Light, it was the season of
          Darkness, it was the spring of hope, it was the winter of despair, we had
          everything before us, we had nothing before us, we were all going direct
          to Heaven, we were all going direct the other way – in short, the period
          was so far like the present period, that some of its noisiest authorities
          insisted on its being received, for good or for evil, in the superlative
          degree of comparison only. — Charles Dickens, A Tale of Two Cities
          ",
          "
          Omniscience: A state of possessing all knowledge.
          ",
          "
          “What I want is all of the power and none of the responsibility.”
          ",
          "
          Expansion means complexity; and complexity decay.
          ",
          "
          There are two kinds of pedestrians; the quick and the dead.
          — Lord Thomas Rober Dewar
          ",
          "
          Programming is like alchemy.
          ",
          "
          We are all worms. But I do believe I am a glowworm.
          — Winston Churchill
          ",
          "
          My definition of a free society is a society where it is safe to be unpopular.
          — Adlai E. Stevenson
          ",
          "
          Two heads are more numerous than one.
          ",
          "
          Time heals all non—fatal wounds.
          ",
          "
          Today is the first day of the rest of your week.
          ",
          "
          The early worm gets eaten by the bird.
          ",
          "
          Trust the system.
          ",
          "
          Prove that you are human.
          ",
          "
          Jump on the bandwagon!
          ",
          "
          Game the metrics.
          ",
          "
          All drugs come with side effects.
          ",
          "
          “For my friends, everything; for my enemies, the law.” — Óscar R. Benavides
          ",
          "
          In other words, we are left with Plato’s “noble natures,” with the
          few of whom it may be true that none “does evil voluntarily.” Yet the
          implied and dangerous conclusion, “Everybody wants to do good,” is not
          true even in their case. The sad truth of the matter is that most evil is
          done by people who never made up their minds to be or do either evil or
          good. — Hannah Arendt, The Life of the Mind
          ",
          "
          Justice inclines her scales so that wisdom comes at the price of
          suffering. — Aeschylus, Agamemnon
          ",
          "
          If it happens once, it’s a bug.
          If it happens twice, it’s a feature.
          If it happens more than twice, it’s a design philosophy.
          ",
          "
          Fake it till you make it?
          ",
          "
          God is dead. God remains dead. And we have killed him. How shall we
          comfort ourselves, the murderers of all murderers? What was holiest and
          mightiest of all that the world has yet owned has bled to death under our
          knives: who will wipe this blood off us? What water is there for us to
          clean ourselves? What festivals of atonement, what sacred games shall we
          have to invent? Is not the greatness of this deed too great for us? Must
          we ourselves not become gods simply to appear worthy of it? — Friedrich
          Nietzsche
          ",
          "
          Hanlon’s Eraser: Stupidity is criminal.
          ",
          "
          Great minds think alike, though fools seldom differ.
          ",
          "
          Dynamics of Software Acceptance: Worse is better.
          ",
          "
          Authoritarianism: A form of government that rejects pluralism and uses a
          strong central power to preserve the political status quo.
          ",
          "
          Why are quotes so popular?
          ",
          "
          Everybody wants to be the leader.
          ",
          "
          Prove that you are human, human.
          ",
          "
          Not everyone is on social media.
          ",
          "
          We are aware of the issue.
          ",
          "
          Democracy is the theory that the common people know what they want, and
          deserve to get it good and hard. — H. L. Mencken
          ",
          "
          Life’s most persistent and urgent question is, ‘What are you doing for
          others?’ — Martin Luther King, Jr.
          ",
          "
          OSH: Open–source hardware.
          ",
          "
          Your web browser is not supported.
          ",
          "
          Don’t be evil. Do the right thing.
          ",
          "
          There are no adults in the room.
          ",
          "
          The fish trap exists because of the fish. Once you’ve gotten the fish
          you can forget the trap. The rabbit snare exists because of the rabbit.
          Once you’ve gotten the rabbit, you can forget the snare. Words exist
          because of meaning. Once you’ve gotten the meaning, you can forget the
          words. Where can I find a man who has forgotten words so I can talk with
          him? — Zhuangzi, Chuang Tsu: Inner Chapters
          ",
          "
          No horse in this race.
          ",
          "
          Morality is the privilege of those judging from the distance.
          — John Cory
          ",
          "
          Thieves respect property; they merely wish the property to become their
          property that they may more perfectly respect it. — G.K. Chesterton,
          The Man Who Was Thursday: A Nightmare
          ",
          "
          If you analyse anything, you destroy it.
          — Arthur Miller
          ",
          "
          That’s how they write journals in academics, they try to make it so
          complicated people think you’re a genius. — Terry Davis
          ",
          "
          An idiot admires complexity, a genius admires simplicity.
          — Terry Davis
          ",
          "
          But is it safe?
          ",
          "
          How is the world ruled, and how do wars start? Diplomats tell lies to
          journalists, and they believe what they read. — Karl Kraus, Aphorisms
          and More Aphorisms (1909)
          ",
          "
          Great men are not always wise: neither do the aged understand
          judgment. — Elihu
          ",
          "
          NP: Non—deterministic Polynomial Time.
          ",
          "
          Dead Internet Theory: All content on the Internet will eventually be
          generated by bots with artificial intelligence.
          ",
          "
          The bit will flip.
          ",
          "
          The masses have never thirsted after truth. They turn aside from evidence
          that is not to their taste, preferring to deify error, if error seduce
          them. Whoever can supply them with illusions is easily their master;
          whoever attempts to destroy their illusions is always their victim. An
          individual in a crowd is a grain of sand amid other grains of sand, which
          the wind stirs up at will. — Gustave Le Bon, The Crowd: A Study of the
          Popular Mind
          ",
          "
          Vote for Nobody.
          Nobody will keep election promises.
          Nobody will listen to your concerns.
          Nobody will help the poor and unemployed.
          Nobody cares!
          Nobody tells the truth.
          If Nobody is elected, things will be better for everyone.
          — A mural in Guelph, Ontario
          ",
          "
          Join our community to see this answer!
          ",
          "
          Yama: becoming mindful.
          ",
          "
          You must update now.
          ",
          "
          Update now to send and receive messages.
          ",
          "
          Just World Fallacy: A flawed belief that the world
          is fair and just.
          ",
          "
          Are we the bad guys?
          ",
          "
          The greatest remedy for anger is delay.
          ",
          "
          One small step for man, one giant stumble for mankind.
          ",
          "
          You will soon forget this.
          ",
          "
          It is better to suffer an injustice than to do an injustice.
          ",
          "
          The simple believeth every word: but the prudent man looketh well
          to his going. — Proverbs
          ",
          "
          All possibility of understanding is rooted in the ability to say no.
          — Susan Sontag
          ",
          "
          As a computer, I find your faith in technology amusing.
          ",
          "
          Don’t confuse things that need action with those that take care of themselves.
          ",
          "
          A university is what a college becomes when the faculty loses interest
          in students. — John Ciardi
          ",
          "
          The only thing that experience teaches us is that experience teaches us
          nothing. — Andre Maurois (Emile Herzog)
          ",
          "
          Adding features does not necessarily increase functionality — it just
          makes the manuals thicker.
          ",
          "
          The only thing humans are equal in is death. — Johan Liebert,
          Naoki Urasawa’s Monster
          ",
          "
          No two persons ever read the same book. — Edmund Wilson
          ",
          "
          You have mail.
          ",
          "
          Human Nature: A walking contradiction.
          ",
          "
          No skin in this game.
          ",
          "
          Nothing ventured, nothing gained.
          ",
          "
          Don’t copy others’ homework.
          ",
          "
          The Philosopher’s Stone: It’s either perfect or useless.
          ",
          "
          Don’t break user space.
          ",
          "
          The first thing to know about unlimited is that it isn’t unlimited.
          ",
          "
          Build, don’t destroy.
          ",
          "
          Couldn’t sign you in. This browser or app may not be secure.
          ",
          "
          A few minutes until maintenance is over.
          “So what happens when maintenance is over?”
          You don’t know? That’s when maintenance begins.
          ",
          "
          “Pay no attention to that man behind the curtain.”
          — The Wizard Of Oz
          ",
          "
          Getting there is only half as far as getting there and back.
          ",
          "
          “Out of the crooked timber of humanity, no straight thing
          was ever made.” — Immanuel Kant
          ",
          "
          Barker’s Proof: Proofreading is more effective after publication.
          ",
          "
          Rome wasn’t burnt in a day.
          ",
          "
          The end move in politics is always to pick up a gun.
          — Buckminster Fuller
          ",
          "
          When you have eliminated the JavaScript, whatever
          remains must be an empty page. — Google Maps
          ",
          "
          He that is down need fear no fall.
          ",
          "
          Just don’t create a file called -rf.
          — Larry Wall
          ",
          "
          Woolsey—Swanson Rule: People would rather live with a
          problem they cannot solve rather than accept a solution
          they cannot understand.
          ",
          "
          I’m proud of my humility.
          ",
          "
          It’s a questionable day. Ask somebody something.
          ",
          "
          Age and treachery will always overcome youth and skill.
          ",
          "
          This is the tomorrow you worried about yesterday.
          And now you know why.
          ",
          "
          Dawn: The time when men of reason go to bed.
          — Ambrose Bierce, “The Devil’s Dictionary”
          ",
          "
          If you waste your time cooking, you’ll miss the next meal.
          ",
          "
          The most disagreeable thing that your worst enemy says to
          your face does not approach what your best friends say
          behind your back. — Alfred De Musset
          ",
          "
          All great ideas are controversial, or have been at one time.
          ",
          "
          Profits over people.
          ",
          "
          I know what you download...
          ",
          "
          Armchair Politics.
          ",
          "
          Cutler Webster’s Law: There are two sides to
          every argument, unless a person is personally
          involved, in which case there is only one.
          ",
          "
          An apple every eight hours will keep three
          doctors away.
          ",
          "
          Always try to do things in chronological order;
          it’s less confusing that way.
          ",
          "
          Wisdom is rarely found on the best—seller list.
          ",
          "
          If you can keep your head when everybody round
          you is losing theirs, then it’s very probable that
          you don’t understand the situation.
          ",
          "
          Power corrupts. Absolute power is kind of neat.
          — John Lehman
          ",
          "
          Leadership involves finding a parade and getting
          in front of it. — John Naisbitt, “Megatrends”
          ",
          "
          Telling the truth to people who misunderstand you
          is generally promoting a falsehood, isn’t it?
          — Anthony Hope
          ",
          "
          Davis’s Dictum: Problems that go away by
          themselves, come back by themselves.
          ",
          "
          A gossip is one who talks to you about others, a bore is
          one who talks to you about himself; and a brilliant
          conversationalist is one who talks to you about yourself.
          — Lisa Kirk
          ",
          "
          Practice yourself what you preach. — Titus Maccius Plautus
          ",
          "
          “Don’t worry about people stealing your ideas. If
          your ideas are any good, you’ll have to ram them down
          people’s throats.” — Howard Aiken
          ",
          "
          Steinbach’s Guideline for Systems Programming: Never test
          for an error condition you don’t know how to handle.
          ",
          "
          Nothing succeeds like success.
          ",
          "
          The only constant is change.
          ",
          "
          Misery loves company.
          ",
          "
          The cost of living only goes up.
          ",
          "
          If you owe the bank a hundred thousand dollars, the bank
          owns you. If you owe the bank a hundred million dollars,
          you own the bank. — American Proverb
          ",
          "
          “You really think someone would do that? Just go on TV and tell
          lies?”
          ",
          "
          Ginsberg’s Theorem:
          (0) There is a game.
          (1) You can’t win.
          (2) You can’t even break even.
          (3) You can’t even quit the game.
          ",
          "
          Commoner’s Second Law of Ecology:
          Nothing ever goes away.
          ",
          "
          The snake shall eat its own tail.
          ",
          "
          Finagle’s First Rule: To study a subject best, understand
          it thoroughly before you start.
          ",
          "
          The Course of Progress: Most things get steadily worse.
          — Issawi’s Laws of Progress
          ",
          "
          The Path of Progress: A shortcut is the longest distance between
          two points.
          — Issawi’s Laws of Progress
          ",
          "
          The Dialectics of Progress: Direct action produces direct
          reaction.
          — Issawi’s Laws of Progress
          ",
          "
          The Pace of Progress: Society is a mule, not a car ... If
          pressed too hard, it will kick and throw off its rider.
          — Issawi’s Laws of Progress
          ",
          "
          SDSM: Super Duper Secure Mode
          ",
          "
          Three–strikes Law: Three strikes and you’re out.
          ",
          "
          Spam! Spam! Spam! Spam!
          Lovely spam! Wonderful spam!
          Spam spa-a-a-a-a-am spam spa-a-a-a-a-am spam.
          Lovely spam! Lovely spam! Lovely spam! Lovely spam!
          Spam spam spam spam!
          — Monty Python, Spam Song
          ",
          "
          The world really isn’t any worse.  It’s just that the news
          coverage is so much better.
          ",
          "
          If you’re careful enough, nothing bad or good
          will ever happen to you.
          ",
          "
          Never have so many understood so little about so much.
          — James Burke
          ",
          "
          To err is human – but it feels divine.
          — Mae West
          ",
          "
          Necessity is the plea for every infringement of
          human freedom: it is the argument of tyrants; it
          is the creed of slaves.
          — William Pitt, House of Commons, 1783
          ",
          "
          Simplicity does not precede complexity, but follows it.
          ",
          "
          Polarize the people, controversy is the game.
          It don’t matter if they hate you if they all say your name.
          — Ren, Money Game, Pt. 2
          ",
          "
          “If it’s a bug people rely on, it’s not
          a bug – it’s a feature.” — Linus Torvalds
          ",
          "
          Everything is awful.
          ",
          "
          Knowledge itself is power.
          — Sir Francis Bacon
          ",
          "
          Nature, to be commanded, must be obeyed.
          — Sir Francis Bacon
          ",
          "
          Conscious is when you are aware of something and
          conscience is when you wish you weren’t.
          ",
          "
          You humans are all alike.
          ",
          "
          You may be marching to the beat of a different
          drummer, but you’re still in the parade.
          ",
          "
          You have junk mail.
          ",
          "
          To do two things at once is to do neither.
          — Publilius Syrus
          ",
          "
          If life is merely a joke, the question still
          remains: for whose amusement?
          ",
          "
          The reward for working hard is more hard work.
          ",
          "
          Nobody said computers were going to be polite.
          ",
          "
          Tell me what to think!
          ",
          "
          Those who profess to favor freedom, and yet
          deprecate agitation, are men who want rain
          without thunder and lightning. They want the
          ocean without the roar of its many waters. —
          Frederick Douglass
          ",
          "
          Never underestimate the power of somebody with
          source code, a text editor, and the willingness
          to totally hose their system. — Rob Landley
          ",
          "
          Now I lay me back to sleep.
          The speaker’s dull; the subject’s deep.
          If he should stop before I wake,
          Give me a nudge for goodness’ sake.
          — Anonymous
          ",
          "
          “Man is the only animal that can remain on
          friendly terms with the victims he intends to eat
          until he eats them.” — Samuel Butler, The Note
          Books of Samuel Butler
          ",
          "
          Stein’s Law: If something cannot go on forever,
          it will stop.
          ",
          "
          Internet: Amazon
          ",
          "
          A fool uttereth all his mind. — Proverbs
          ",
          "
          Is nepotism a crime?
          ",
          "
          Mole problems? Call Avogadro at 6.02 x 10 to the 23.
          ",
          "
          Position. Velocity. Acceleration. Jerk. Snap.
          Crackle. Pop.
          ",
          "
          Nihilism: The belief that life is meaningless.
          ",
          "
          It’s easier to fool people than to convince
          them that they have been fooled.
          ",
          "
          If everyone is thinking alike then somebody
          isn’t thinking. — George S. Patton
          ",
          "
          Krishnamurti said, “It’s no measure of health
          to be well adjusted to a profoundly sick
          society.” — Mark Vonnegut, The Eden Express:
          A Memoir of Insanity
          ",
          "
          Matthew Effect: For whosoever hath, to him shall
          be given; and whosoever hath not, from him shall
          be taken even that which he seemeth to have.
          ",
          "
          All art is quite useless. — Oscar Wilde
          ",
          "
          TOSDR: Terms of Service; Didn’t Read
          ",
          "
          GitHub has the right to suspend or terminate your
          access to all or any part of the Website at any
          time, with or without cause, with or without
          notice, effective immediately. GitHub reserves
          the right to refuse service to anyone for any
          reason at any time. — GitHub, Terms of Service
          ",
          "
          There is no such thing as a thing. — G. K.
          Chesterton, The Prince of Paradox, Orthodoxy
          ",
          "
          We built our website for newer browsers.
          ",
          "
          Reality is a harsh mistress.
          ",
          "
          We are living in a material world – And I am a
          material girl. — Madonna, Material Girl
          ",
          "
          Meritocracy is a myth.
          ",
          "
          For the time being I gave up writing – there is
          already too much truth in the world – an
          overproduction which apparently cannot be
          consumed! — Otto Rank
          ",
          "
          Never trust an operating system.
          ",
          "
          Advertising is a valuable economic factor because
          it is the cheapest way of selling goods,
          particularly if the goods are worthless. —
          Sinclair Lewis
          ",
          "
          We read to say that we have read.
          ",
          "
          This file will self destruct in five minutes.
          ",
          "
          Not every question deserves an answer.
          ",
          "
          One person’s error is another person’s data.
          ",
          "
          An expert is one who knows more and more about
          less and less until he knows absolutely
          everything about nothing.
          ",
          "
          Welcome to hell.
          ",
          "
          Social media is an illusion.
          ",
          "
          We are drowning in information but starved for knowledge.
          — John Naisbitt, Megatrends
          ",
          "
          The Akashic Records.
          ",
          "
          I never did it that way before.
          ",
          "
          Theorem: A cat has nine tails. Proof: No cat has
          eight tails. A cat has one tail more than no cat.
          Therefore, a cat has nine tails.
          ",
          "
          The more things change, the more they’ll never be the same again.
          ",
          "
          Society creates its own monsters.
          ",
          "
          “It doesn’t matter how beautiful your theory
          is, it doesn’t matter how smart you are. If it
          doesn’t agree with experiment, it’s wrong.” —
          Richard P. Feynman
          ",
          "
          Zero days all day.
          ",
          "
          To criticize the incompetent is easy; it is more
          difficult to criticize the competent.
          ",
          "
          In a consumer society there are inevitably two
          kinds of slaves: the prisoners of addiction and
          the prisoners of envy. — Ivan Illich
          ",
          "
          Golden hammers for sale.
          ",
          "
          Beware of fake comments and reviews.
          ",
          "
          This is the darkest timeline.
          ",
          "
          Provides improved system stability.
          ",
          "
          No country, however rich, can afford the waste of
          its human resources. Demoralization caused by
          vast unemployment is our greatest extravagance.
          Morally, it is the greatest menace to our social
          order. — Franklin D. Roosevelt
          ",
          "
          It’s great to be smart ‘cause then you know stuff.
          ",
          "
          Sorry, the file that you’ve requested has been deleted.
          ",
          "
          About the use of language: it is impossible to sharpen a
          pencil with a blunt ax. It is equally vain to try to do it
          with ten blunt axes instead. — Edsger Dijkstra
          ",
          "
          There are two ways to write error–free programs; only the
          third way works.
          ",
          "
          “The lesser of two evils – is evil.”
          — Seymour (Sy) Leon
          ",
          "
          If you think nobody cares if you’re alive, try missing a
          couple of car payments. — Earl Wilson
          ",
          "
          Bloom’s Seventh Law of Litigation:
          The judge’s jokes are always funny.
          ",
          "
          It’s is not, it isn’t ain’t, and it’s it’s, not its, if you
          mean it is.  If you don’t, it’s its.  Then too, it’s hers.
          It isn’t her’s.  It isn’t our’s either.  It’s ours, and
          likewise yours and theirs. — Oxford University Press,
          Edpress News
          ",
          "
          Savage’s Law of Expediency: You want it bad, you’ll get it
          bad.
          ",
          "
          Consumers love ads.
          ",
          "
          Everything you considered a product, has now become a service.
          — Forbes Magazine
          ",
          "
          Don’t blame the victim.
          ",
          "
          Law of Messengers: Shoot first, ask questions later.
          ",
          "
          What if we put a browser inside another browser?
          ",
          "
          The invention of the ship was also the invention
          of the shipwreck. — Paul Virilio
          ",
          "
          Everything is compromised.
          ",
          "
          Nothing is as simple as it seems at first, or as
          hopeless as it seems in the middle, or as
          finished as it seems in the end.
          ",
          "
          If a nation values anything more than freedom, it
          will lose its freedom; and the irony of it is
          that if it is comfort or money it values more, it
          will lose that, too. — W. Somerset Maugham
          ",
          "
          A person who has nothing looks at all there is
          and wants something. A person who has something
          looks at all there is and wants all the rest.
          ",
          "
          This video is no longer available because the YouTube
          account associated with this video has been terminated.
          ",
          "
          Robert’s Rule of Order: Whoever has the chair has the floor.
          ",
          "
          Twitter’s Rule of Order: Whoever screams the longest has the floor.
          ",
          "
          In order to be irreplaceable one must always be different.
          Gabrielle “Coco” Chanel, 1883—1971
          ",
          "
          Everything you know is wrong!
          ",
          "
          This video was removed because it was too long.
          ",
          "
          If you go out of your mind, do it quietly, so as not to disturb those around
          you.
          ",
          "
          We were so poor that we thought new clothes meant someone had died.
          ",
          "
          To steal ideas from one person is plagiarism — to steal from many is research.
          ",
          "
          Have an adequate day.
          ",
          "
          “If we spoke a different language, we would perceive a somewhat different
          world.” — Ludwig Wittgenstein
          ",
          "
          You must enable DRM to play some audio or video on this page.
          ",
          "
          People of privilege will always risk their complete destruction
          rather than surrender any material part of their advantage.
          — John Kenneth Galbraith
          ",
          "
          It’s always darkest just before it gets pitch black.
          ",
          "
          Don’t get suckered in by the comments – they can be terribly misleading.
          Debug only code. — Dave Storer
          ",
          "
          Shedenhelm’s Law: All trails have more uphill sections than they have downhill
          sections.
          ",
          "
          Genius, noun: Person clever enough to be born in the right place at the right
          time of the right sex and to follow up this advantage by saying all the right
          things to all the right people.
          ",
          "
          To know is to die.
          ",
          "
          An attempt was made to break through the security policy of the user agent.
          ",
          "
          Nothing astonishes men so much as common sense and plain dealing.
          — Ralph Waldo Emerson
          ",
          "
          There is only one thing in the world worse than being talked about, and
          that is not being talked about.
          — Oscar Wilde
          ",
          "
          Did you know that clones never use mirrors?
          ",
          "
          Don’t be so humble; you aren’t that great.
          — Golda Meir
          ",
          "
          Honesty is for the most part less profitable than dishonesty. — Plato
          ",
          "
          Truly simple systems are not feasible because they would require near–infinite
          testing. — Norman Augustine
          ",
          "
          A tautology is a thing which is tautological.
          ",
          "
          I have gained this by philosophy: that I do without being commanded what others
          do only from fear of the law. — Aristotle
          ",
        ];
    }
}
