var movies = [
  {
    "title":"The Dark Knight",
    "actors":"Christian Bale, Heath Ledger, Aaron Eckhart, Michael Caine",
    "description":"When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.",
    "date":"2009",
    "rating":"9",
    "genre":"Superhero, Action",
    "poster":"/images/darknight.jpg",
    "url":"https://www.youtube.com/embed/EXeTwQWrcwY"
  },
  {
    "title":"Watchmen",
    "actors":"Jackie Earle Haley, Patrick Wilson, Carla Gugino, Malin Akerman",
    "description":"In 1985 where former superheroes exist, the murder of a colleague sends active vigilante Rorschach into his own sprawling investigation, uncovering something that could completely change the course of history as we know it.",
    "date":"2008",
    "rating":"7.6",
    "genre":"Superhero, Action",
    "poster":"/images/watchmen.jpg",
    "url":"https://www.youtube.com/embed/NUjMO_k9IF8"
  },
  {
    "title":"The Avengers",
    "actors":"Robert Downey Jr., Chris Evans, Scarlett Johansson, Jeremy Renner",
    "description":"Earth's mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.",
    "date":"2012",
    "rating":"8.1",
    "genre":"Superhero, Action",
    "poster":"/images/theAvengers.jpg",
    "url":"https://www.youtube.com/embed/eOrNdBpGMv8"
  },
  {
    "title":"Wonder Woman",
    "actors":"Gal Gadot, Chris Pine, Robin Wright",
    "description":"When a pilot crashes and tells of conflict in the outside world, Diana, an Amazonian warrior in training, leaves home to fight a war, discovering her full powers and true destiny.",
    "date":"2017",
    "rating":"7.5",
    "genre":"Superhero, Action",
    "poster":"/images/ww1.jpg",
    "url":"https://www.youtube.com/embed/1Q8fG0TtVAY",
  },
  {
    "title":"The Incredibles",
    "actors":"Craig T. Nelson, Samuel L. Jackson, Holly Hunter, Jason Lee",
    "description":"A family of undercover superheroes, while trying to live the quiet suburban life, are forced into action to save the world.",
    "date":"2004",
    "rating":"8",
    "genre":"Superhero, Animation",
    "poster":"/images/incredibles.jpg",
    "url":"https://www.youtube.com/embed/sZwWCrFNfzQ"
  },
  {
    "title":"Spider-Man: Into the Spider-Verse",
    "actors":"Shameik Moore, Jake Johnson, Hailee Steinfeld",
    "description":"Teen Miles Morales becomes Spider-Man of his reality, crossing his path with five counterparts from other dimensions to stop a threat for all realities.",
    "date":"2017",
    "rating":"8.5",
    "genre":"Superhero, Animation",
    "poster":"/images/spiderman2.jpg",
    "url":"https://www.youtube.com/embed/tg52up16eq0?rel=0;&autoplay=1"
  },
  /*Horror*/
  {
    "title":"The Exorcist",
    "actors":"Ellen Burstyn, Max von Sydow, Linda Blair, Lee J. Cobb",
    "description":"When a teenage girl is possessed by a mysterious entity, her mother seeks the help of two priests to save her daughter.",
    "date":"1973",
    "rating":"8",
    "genre":"Drama, Horror",
    "poster":"/images/exorcist.jpg",
    "url":"https://www.youtube.com/embed/gzFCk_cvmik"
  },
  {
    "title":" The Shining",
    "actors":"Jack Nicholson, Shelley Duvall, Danny Lloyd, Scatman Crothers",
    "description":"A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.",
    "date":"1980",
    "rating":"8.5",
    "genre":"Drama, Horror",
    "poster":"/images/shining.jpg",
    "url":"https://www.youtube.com/embed/5Cb3ik6zP2I"
  },
  {
    "title":"The Conjuring",
    "actors":"Patrick Wilson, Vera Farmiga, Ron Livingston, Lili Taylor",
    "description":"Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.",
    "date":"2013",
    "rating":"7.5",
    "genre":"Horror, Thriller",
    "poster":"/images/conjuring.jpg",
    "url":"https://www.youtube.com/embed/k10ETZ41q5o"
  },
  {
    "title":"The Ring",
    "actors":"Naomi Watts, Martin Henderson, Brian Cox, David Dorfman",
    "description":"A journalist must investigate a mysterious videotape which seems to cause the death of anyone one week to the day after they view it.",
    "date":"2002",
    "rating":"7",
    "genre":"Horror, Mystery",
    "poster":"/images/ring.jpg",
    "url":"https://www.youtube.com/embed/yzR2GY-ew8I"
  },
  {
    "title":"The Babadook",
    "actors":"Essie Davis, Noah Wiseman, Daniel Henshall, Hayley McElhinney",
    "description":"A widowed mother, plagued by the violent death of her husband, battles with her son's fear of a monster lurking in the house, but soon discovers a sinister presence all around her.",
    "date":"2014",
    "rating":"7",
    "genre":"Drama, Horror",
    "poster":"/images/babadook.jpg",
    "url":"https://www.youtube.com/embed/k5WQZzDRVtw"
  },
  {
    "title":"The Cabin in the Woods",
    "actors":"Kristen Connolly, Chris Hemsworth, Anna Hutchison, Fran Kranz",
    "description":"Five friends go for a break at a remote cabin, where they get more than they bargained for, discovering the truth behind the cabin in the woods.",
    "date":"2011",
    "rating":"7",
    "genre":"Horror, Mystery",
    "poster":"/images/cabin.jpeg",
    "url":"https://www.youtube.com/embed/NsIilFNNmkY"
  },
  //animate films
  {
    "title":"Inside Out",
    "actors":"Amy Poehler, Bill Hader, Lewis Black, Mindy Kaling",
    "description":"After young Riley is uprooted from her Midwest life and moved to San Francisco, her emotions - Joy, Fear, Anger, Disgust and Sadness - conflict on how best to navigate a new city, house, and school.",
    "date":"2011",
    "rating":"8.5",
    "genre":"Animation, Adventure",
    "poster":"/images/insideout.jpg",
    "url":"https://www.youtube.com/embed/seMwpP0yeu4"
  },
  {
    "title":"Coco",
    "actors":"Anthony Gonzalez, Gael García Bernal, Benjamin Bratt ",
    "description":"Aspiring musician Miguel, confronted with his family's ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.",
    "date":"2017",
    "rating":"8.5",
    "genre":"Animation, Adventure",
    "poster":"/images/coco.jpg",
    "url":"https://www.youtube.com/embed/Ga6RYejo6Hk"
  },
  {
    "title":"Zootopia",
    "actors":"Ginnifer Goodwin, Jason Bateman, Idris Elba, Jenny Slate",
    "description":"In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work together to uncover a conspiracy.",
    "date":"2016",
    "rating":"8",
    "genre":"Animation, Adventure",
    "poster":"/images/zootopia.jpg",
    "url":"https://www.youtube.com/embed/jWM0ct-OLsM"
  },
  {
    "title":"The SpongeBob Movie",
    "actors":"Tom Kenny, Antonio Banderas, Bill Fagerbakke",
    "description":"When a diabolical pirate above the sea steals the secret Krabby Patty formula, SpongeBob and his nemesis Plankton must team up in order to get it back.",
    "date":"2015",
    "rating":"6",
    "genre":"Animation, Comedy",
    "poster":"/images/spongebob.jpg",
    "url":"https://www.youtube.com/embed/Tv8xk7BKaNM"
  },
  {
    "title":"Spirited Away",
    "actors":"Daveigh Chase, Suzanne Pleshette, Miyu Irino, Rumi Hiiragi",
    "description":"During her family's move to the suburbs, a sullen 10-year-old girl wanders into a world ruled by gods, witches, and spirits, and where humans are changed into beasts.",
    "date":"2001",
    "rating":"8.6",
    "genre":"Animation, Adventure",
    "poster":"/images/spiritedaway.jpg",
    "url":"https://www.youtube.com/embed/ByXuk9QqQkk"
  },
  //comedies
  {
    "title":"Anchorman: The Legend of Ron Burgundy",
    "actors":"Will Ferrell, Christina Applegate, Steve Carell, Paul Rudd",
    "description":"Ron Burgundy is San Diego's top-rated newsman in the male-dominated broadcasting of the 1970s, but that's all about to change for Ron and his cronies when an ambitious woman is hired as a new anchor.",
    "date":"2004",
    "rating":"7.2",
    "genre":"Comedy",
    "poster":"/images/anchorman.jpg",
    "url":"https://www.youtube.com/embed/-T3wnP91OnI"
  },
  {
    "title":"Bridesmaids",
    "actors":"Kristen Wiig, Maya Rudolph, Rose Byrne, Terry Crews",
    "description":"Competition between the maid of honor and a bridesmaid, over who is the bride's best friend, threatens to upend the life of an out-of-work pastry chef.",
    "date":"2011",
    "rating":"6.8",
    "genre":"Comedy, Romance",
    "poster":"/images/bridesmaids.jpg",
    "url":"https://www.youtube.com/embed/FNppLrmdyug"
  },
  {
    "title":"Step Brothers",
    "actors":"Will Ferrell, John C. Reilly, Mary Steenburgen, Richard Jenkins",
    "description":"Two aimless middle-aged losers still living at home are forced against their will to become roommates when their parents marry.",
    "date":"2008",
    "rating":"6.9",
    "genre":"Comedy",
    "poster":"/images/stepbrothers.jpg",
    "url":"https://www.youtube.com/embed/CewglxElBK0"
  },
  {
    "title":"Scary Movie 2",
    "actors":"Anna Faris, Marlon Wayans, Antony Acker, Mark Barrett",
    "description":"Four teens are tricked by their professor into visiting a haunted house for a school project.",
    "date":"2001",
    "rating":"5.3",
    "genre":"Comedy",
    "poster":"/images/scarymovie.jpg",
    "url":"https://www.youtube.com/embed/5t_tgiWatvs"
  },
  {
    "title":"The Longest Yard",
    "actors":"Adam Sandler, Burt Reynolds, Chris Rock, Nelly",
    "description":"Prison inmates form a football team to challenge the prison guards.",
    "date":"2005",
    "rating":"6.4",
    "genre":"Comedy, Crime, Sport",
    "poster":"/images/thelongestyard.jpg",
    "url":"https://www.youtube.com/embed/l1BF53bXP8I"
  },
  {
    "title":"White Chicks",
    "actors":"Marlon Wayans, Shawn Wayans, Busy Philipps, Maitland Ward",
    "description":"Two disgraced FBI agents go way undercover in an effort to protect hotel heiresses the Wilson Sisters from a kidnapping plot.",
    "date":"2004",
    "rating":"5.6",
    "genre":"Comedy, Crime",
    "poster":"/images/whitechicks.jpg",
    "url":"https://www.youtube.com/embed/aeVkbNka9HM"
  }
]
