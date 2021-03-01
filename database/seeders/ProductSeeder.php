<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Bartholomew Bear',
            'slug'=>'bartholomew-bear',
            'description'=>'Tubby cub with lots of love to give.',
            'price'=>'30.00',
            'category_id'=>'1',
            'image'=>'images/products/animals/bear-1.jpg',
            'details'=>"Tawny-tousled and full of softness, Bartholomew Bear is the perfect bedtime buddy. Read him a story, sing him ‘The Teddy Bears’ Picnic' or maybe just rest on his fluffy fudge tummy - he’s adorably podgy!"
        ]);
        Product::create([
            'name'=>'Edward Bear',
            'slug'=>'edward-bear',
            'description'=>'A happy cappuccino bear to share!',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/bear-2.jpg',
            'details'=>"Edward Bear has cuteness to spare, with his heart-shaped face and soft mocha nose! He makes a great travelling pal, and can ride in your bag, peeping out at all the people!"
        ]);
        Product::create([
            'name'=>'Perry Polar Bear',
            'slug'=>'perry-polar-bear',
            'description'=>'Arctic quirky!',
            'price'=>'30.00',
            'category_id'=>'1',
            'image'=>'images/products/animals/bear-3.jpg',
            'details'=>"For the cosiest cuddles in the whole North Pole, skate on over to Perry Polar Bear! Unbelievably snuggly, this cloudy cream cub is as soft as freshly fallen snow. He sits so neatly on his beany bottom, and has the cutest bobble nose and nubbly tail. "
        ]);
        Product::create([
            'name'=>'Little Bear',
            'slug'=>'little-bear',
            'description'=>'Teeny, tumbly, totally scrumbly.',
            'price'=>'17.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/bear-4.jpg',
            'details'=>"Little Bear is such a snoozy sweetpea. Fuzzly-soft in vintage toffee tussles, with wee bobble paws and a choolate-drop nose, this shy little snuggler wants to meet a loving friend. A classic pocket pal."
        ]);
        Product::create([
            'name'=>'Bashful Beige Bunny',
            'slug'=>'bashful-beige-bunny',
            'description'=>'A JellyBear favourite, this loveable bunny',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/rabbit-1.jpg',
            'details'=>'Bashful Beige Bunny is a popular fellow with scrummy-soft Jellycat fur and lovely long flopsy ears mean that with just one cuddle, you’ll never want to let go. Irresistibly cute and a perfect gift for boys or girls. Everyone treasures this little beige bunny.'
        ]);
        Product::create([
            'name'=>'Bashful Cream Bunny',
            'slug'=>'bashful-cream-bunny',
            'description'=>'Cloudy-soft snuggles and lazy picnic times.',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/rabbit-2.jpg',
            'details'=>"Bashful Cream Bunny’s gorgeous long ears look like two big dollops of clotted cream. Mmmm! Time for scones and a hippity-hop on the grass! With a bunny pal as soft as butter icing, summer days are so inviting!"
        ]);
        Product::create([
            'name'=>'Bashful Silver Bunny',
            'slug'=>'bashful-silver-bunny',
            'description'=>'A sweet silver bunny who’s worth his weight in gold!',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/rabbit-3.jpg',
            'details'=>'In Bashful Silver Bunny’s warren, everything is silver! Their soft bed, their teapot, even their tea is Earl Grey! But it’\s such a pretty colour, it’s understandable. Their cuddly silver tummy is deliciously soft and their long lop ears are soo fluffy.'
        ]);
        Product::create([
            'name'=>'Bashful Navy Bunny',
            'slug'=>'bashful-navy-bunny',
            'description'=>'Bluey bounces and navy nuzzles.',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/rabbit-4.jpg',
            'details'=>'Snuffly, snuggly Bashful Navy Bunny is here to say hello! Gorgeously soft in divine dark-blue fur, this lopsy bun is up for an adventure. Mud and dust don\'t worry our bunny - it\'s all about having a hop, skip and jump.'
        ]);
        Product::create([
            'name'=>'Squishu Puppy',
            'slug'=>'squishu-puppy',
            'description'=>'A pompom puppy for your pocket!',
            'price'=>'23.00',
            'category_id'=>'1',
            'image'=>'images/products/animals/dog-1.jpg',
            'details'=>"For a mini companion who gives mighty hugs, pop Squishu Puppy in the buggy! This cloudy-soft cutie has flopsy grey ears, a splendid splodge patch and a round little tum (possibly from chomping treats)! Tussled, tumbled and a tiny bit ticklish!"
        ]);
        Product::create([
            'name'=>'Huggady Dog',
            'slug'=>'huggady-dog',
            'description'=>'Dreaming of toys and treats and tickles.',
            'price'=>'25.00',
            'category_id'=>'1',
            'image'=>'images/products/animals/dog-2.jpg',
            'details'=>"Tumbly, bumbly Huggady Dog gets so excited and just has to flump! A soft mushroom puppy with flopover ears, big trumpet paws and a nuzzly muzzle, this dizzy doggo deserves all the snuggles!"
        ]);
        Product::create([
            'name'=>'Bashful Black & Cream Puppy',
            'slug'=>'bashful-black-cream-puppy',
            'description'=>'This little patch pup is doggone irresistible.',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/dog-3.jpg',
            'details'=>"Silky-soft and lovingly loyal, Bashful Black & Cream Puppy wants to play all day! His smudgy black patch and sooty tail make him even more adorable!"
        ]);
        Product::create([
            'name'=>'Bashful Toffee Puppy',
            'slug'=>'bashful-toffee-puppy',
            'description'=>'What a sweetie!',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/dog-4.jpg',
            'details'=>"Bashful Toffee Puppy is a gorgeous retriever, but he is still learning how to spell that! This supercute, soft little pup wants to be a guide dog when he grows up. He loves to help people and make friends."

        ]);
        Product::create([
            'name'=>'Woogie Monkey',
            'slug'=>'woogie-monkey',
            'description'=>'It is fun foraging for fruit!',
            'price'=>'19.00',
            'category_id'=>'1',
            'image'=>'images/products/animals/monkey-1.jpg',
            'details'=>'Woogie Monkey is huggably happy in fleecy hazelnut fur. With peachy velour cheeks, sticky-out ears and a long, curly tail for swinging from branches, this flopsy-foot scruffler is coconut-sweet. A perfect first present for cheeky tots.'
        ]);
        Product::create([
            'name'=>'Bashful Monkey',
            'slug'=>'bashful-monkey',
            'description'=>'Squish-squashable cheekiness!',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/monkey-2.jpg',
            'details'=>"Made of beautiful silky smooth Bashful fur in a scrummy creamy chocolatey colour, this monkey swings through the trees as fast as can be, to become a number one playmate- understandably!"
        ]);
        Product::create([
            'name'=>'Brodie Monkey',
            'slug'=>'brodie-monkey',
            'description'=>'Bumbling and bounding with goofy Brodie!',
            'price'=>'30.00',
            'category_id'=>'1',
            'image'=>'images/products/animals/monkey-3.jpg',
            'details'=>'Brodie Monkey is one funny fellow, with sticky-out ears and hands like feet! A cocoa-cream clambering kerfuffle, this lopsy monkey is always in trouble! He\'s proud of his lovely rumply long tail and his bobbly nose for sniffing out fruits!'
        ]);
        Product::create([
            'name'=>'Fuddlewuddle Monkey',
            'slug'=>'fuddlewuddle-monkey',
            'description'=>'Jokes and jiggles and Fuddlewuddle giggles!',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/monkey-4.jpg',
            'details'=>"Tiny Tarzans, meet your new best friend: Fuddlewuddle Monkey is ripply ruffly soft and ready to get into all kinds of trouble! But if you snuggle his soft ginger tummy, he will soon forget his pranks and tricks."
        ]);
        Product::create([
            'name'=>'Rolbie Cream Sheep',
            'slug'=>'rolbie-cream-sheep',
            'description'=>'Dreamy days and buttercup lunches!',
            'price'=>'35.00',
            'category_id'=>'1',
            'image'=>'images/products/animals/sheep-1.jpg',
            'details'=>'Rolbie Sheep is gorgeously round, with a fluffy cream fleece and gentle beigey face. Friendly and fluffy, this sheep may be tubby but can leap over any stile or gate! Kindly shepherds very welcome!'
        ]);
        Product::create([
            'name'=>'Libby Lamb',
            'slug'=>'libby-lamb',
            'description'=>'Dreaming of daisies and daffodils.',
            'price'=>'30.00',
            'category_id'=>'1',
            'image'=>'images/products/animals/sheep-2.jpg',
            'details'=>'Libby Lamb is a lollopy lovely, with yummy, fluffy marshmallow fleece. This shy wee sheep is baby-friendly, with soft praline hooves that match her face and ears. A gentle, nuzzly naptime pal, Libby gives wonderful sleepy cuddles.'
        ]);
        Product::create([
            'name'=>'Bashful Lamb',
            'slug'=>'bashful-lamb',
            'description'=>'This fleecy little lamb is three bags full of cuteness!',
            'price'=>'22.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/sheep-3.jpg',
            'details'=>'Tumbly-bumbly, creamy and cuddly, Bashful Lamb has gotten all dizzy! Her dreamily soft buttercream fur and flopsy ears are irresistibly scrummy - no wonder she’s such a loveable baby!'
        ]);
        Product::create([
            'name'=>'Little Lamb',
            'slug'=>'little-lamb',
            'description'=>'Has anybody seen my friend Mary?',
            'price'=>'17.50',
            'category_id'=>'1',
            'image'=>'images/products/animals/sheep-4.jpg',
            'details'=>'Friendly and gentle, Little Lamb is small enough to snuggle in your bag. This shy little sheep has a tussled creamy fleece, peachy face and waggly ears. And do not forget that teeny tail and loveably cuddly tummy!'
        ]);
        Product::create([
            'name'=>'My Best Pet Book And Bashful Dino',
            'slug'=>'my-best-pet-book-and-bashful-dino',
            'description'=>'Dino-roars!',
            'price'=>'37.50',
            'category_id'=>'2',
            'image'=>'images/products/books/dino.jpg',
            'details'=>'Time to explore a Jurassic tale with My Best Pet Book and Bashful Dinosaur. This is a fun read for the little ones and explores the many talents of this stegosaurus.'
        ]);
        Product::create([
            'name'=>'The Hiccupy Dragon Book And Drake Dragon',
            'slug'=>'the-hiccupy-dragon-book-and-drake-dragon',
            'description'=>'Hiccupy hiccups!',
            'price'=>'37.50',
            'category_id'=>'2',
            'image'=>'images/products/books/dragon.jpg',
            'details'=>'Now you can join your favourite Jellycat toys on their story adventures. The Hiccupy Dragon is a great book for all mythical creature lovers and now you can read along with Drake Dragon'
        ]);
        Product::create([
            'name'=>'The Naughty Penguins Book And Peanut Penguin',
            'slug'=>'the-naughty-penguins-book-and-peanut-penguin',
            'description'=>'Antarctic Most Wanted',
            'price'=>'33.50',
            'category_id'=>'2',
            'image'=>'images/products/books/penguin.jpg',
            'details'=>'This is the ultimate combo for little ones who love chilly adventures! Keep warm and snuggle up to Peanut Penguin whilst reading along to this sweet story about three cheeky penguins.'
        ]);
        Product::create([
            'name'=>'An Elephant Nose Best Book And Emile Elephant',
            'slug'=>'an-elephant-nose-best-book-and-emile-elephant',
            'description'=>'It is Jungle Adventure Time!',
            'price'=>'37.50',
            'category_id'=>'2',
            'image'=>'images/products/books/elephant.jpg',
            'details'=>'This set is the perfect gift for jungle fans. An Elephant Nose Best explores the story of a little elephant and is complete with colourful illustrations. Emile Elephant is also included as a book buddy.'
        ]);
        Product::create([
            'name'=>'My Mum And Me Book And Bashful Lamb',
            'slug'=>'my-mum-and-me-book-and-bashful-lamb',
            'description'=>'Three bags of wool',
            'price'=>'34.50',
            'category_id'=>'2',
            'image'=>'images/products/books/lamb.jpg',
            'details'=>'My Mum and Me is a sweet story for the whole family to enjoy. Bashful Lamb comes with this set, so whether it’s a gift idea or just something for the little ones to enjoy, this set will not disappoint.'
        ]);
        Product::create([
            'name'=>'The Very Brave Lion Book And Fuddlewuddle Lion',
            'slug'=>'the-very-brave-lion-book-and-fuddlewuddle-lion',
            'description'=>'Let us hear a ROAR',
            'price'=>'40.00',
            'category_id'=>'2',
            'image'=>'images/products/books/lion.jpg',
            'details'=>'The Very Brave Lion book and the Fuddlewuddle Lion are the perfect combination for Jungle lovers. This is a story about courage and achievement, and reading along with a new furry friend is so much fun!'
        ]);
        Product::create([
            'name'=>'I Know A Monkey Book And Bashful Monkey',
            'slug'=>'i-know-a-monkey-book-and-bashful-monkey',
            'description'=>'One Cheeky Monkey',
            'price'=>'37.50',
            'category_id'=>'2',
            'image'=>'images/products/books/monkey.jpg',
            'details'=>'I Know A Monkey and Bashful Monkey set is a great gift for the little ones. They can now read along to their favourite Jellycat friends stories whilst giving them a cuddle at the same time.'
        ]);
        Product::create([
            'name'=>'If I Were A Panda Book And Harry Panda Cub',
            'slug'=>'if-i-were-a-panda-book-and-harry-panda-cub',
            'description'=>'Who is that hiding behind the bamboo?',
            'price'=>'33.50',
            'category_id'=>'2',
            'image'=>'images/products/books/panda.jpg',
            'details'=>'Harry Panda Cub is usually shy, except for when he has a book in his hands. And now he comes with the If I Were a Panda book, so now little readers can enjoy reading with a new furry friend.'

        ]);
        Product::create([
            'name'=>'Scruffy Puppy Book And Bashful Puppy',
            'slug'=>'scruffy-puppy-book-and-bashful-puppy',
            'description'=>'Woof Woof (Means Hello in Dog)',
            'price'=>'35.00',
            'category_id'=>'2',
            'image'=>'images/products/books/puppy.jpg',
            'details'=>'The Scruffy Puppy is a story about a sweet pup who is misunderstood for his looks. Complete with your new friend Bashful Puppy, this set is a great present for the little book worms.'
        ]);
        Product::create([
            'name'=>'When I Am Big Book And Bashful Cream Bunny',
            'slug'=>'when-i-am-big-book-and-bashful-cream-bunny',
            'description'=>'Bunny Tails and Bunny Tales',
            'price'=>'37.50',
            'category_id'=>'2',
            'image'=>'images/products/books/rabbit.jpg',
            'details'=>'Get comfy with Bashful Cream Bunny and why not read a book together? When I Am Big is full of lovely illustrations and is a fun read for the little ones.'
        ]);
        Product::create([
            'name'=>'My Friend Bunny Book And Bashful Beige Bunny',
            'slug'=>'my-friend-bunny-book-and-bashful-beige-bunny',
            'description'=>'Reading and Hopping',
            'price'=>'37.50',
            'category_id'=>'2',
            'image'=>'images/products/books/rabbit-2.jpg',
            'details'=>'Calling all Bashful Bunny lovers! The My Friend Bunny book and Bashful Beige Bunny set makes for the perfect present for all the little ones.'
        ]);
        Product::create([
            'name'=>'If I Were A Sloth Book And Bailey Sloth',
            'slug'=>'if-i-were-a-sloth-book-and-bailey-sloth',
            'description'=>'Slow and Steady, Cute and Cuddly',
            'price'=>'35.00',
            'category_id'=>'2',
            'image'=>'images/products/books/sloth.jpg',
            'details'=>'If I were a Sloth Book is pefect for curious little ones as it contains different fabrics to feel whilst reading along! There is also Bailey, everyone\'s favourite soft sloth, who makes a great reading partner.'
        ]);
        Product::create([
            'name'=>'If I Were A Unicorn Book And Bashful Unicorn',
            'slug'=>'if-i-were-a-unicorn-book-and-bashful-unicorn',
            'description'=>'Magic and sparkles!',
            'price'=>'27.50',
            'category_id'=>'2',
            'image'=>'images/products/books/unicorn.jpg',
            'details'=>'Bashful Unicorn and If I Were a Unicorn book set make a great gift idea for the mythical creature lovers. Help the little ones learn to read with their favourite Jellycat toys.'
        ]);
        Product::create([
            'name'=>'Amuseable Colours Book And Amuseable Avocado',
            'slug'=>'amuseable-colours-book-and-amuseable-avocado',
            'description'=>'Adorable Amuseables',
            'price'=>'29.00',
            'category_id'=>'2',
            'image'=>'images/products/books/avocado.jpg',
            'details'=>'Calling all Amuseable fans! The little ones are sure to have fun learning about colours with this book, and now it comes with an Amuseable Avocado companion.'
        ]);
        Product::create([
            'name'=>'Amuseable Avocado Bag',
            'slug'=>'amuseable-avocado-bag',
            'description'=>'Get ready to guac and roll!',
            'price'=>'22.50',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/avocado.jpg',
            'details'=>'Avo-cuddle on the go with the super-soft Amuseable Avocado Bag. This adorable two-tone green cross body boasts a sleek matching strap, and ample storage in its belly for all your necessities.'
        ]);
        Product::create([
            'name'=>'Amuseable Toast Bag',
            'slug'=>'amuseable-toast-bag',
            'description'=>'Use your loaf!',
            'price'=>'22.50',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/bread.jpg',
            'details'=>'Breakfast is the most important meal of the day - that\'s what Amuseable Toast Bag thinks, anyway! This little slice of kawaii has a cheery smile, a cross-body strap and the fluffiest crust we\'ve ever seen! Rise and shine with this wholegrain hero!'
        ]);
        Product::create([
            'name'=>'Amuseable Cloud Bag',
            'slug'=>'amuseable-cloud-bag',
            'description'=>'Go walking on cloud nine!',
            'price'=>'22.50',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/cloud.jpg',
            'details'=>'A-cumulus your necessities in the Amuseable Cloud Bag. This adorable fluffy bag is the perfect piece to round off any outfit with its soft white plush and grey strap. The super-cute face and cordy legs make it a go-to whatever the weather.'
        ]);
        Product::create([
            'name'=>'Amuseable Pear Bag',
            'slug'=>'amuseable-pear-bag',
            'description'=>'Go green to be seen!',
            'price'=>'25.00',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/pear.jpg',
            'details'=>'Fresh, funky and fabulously chunky, it\'s the Amuseable Pear Bag! This tubby lined bag has soft fruity fur, a dandy cordy stalk, leaf, and feet, and a sturdy cross-body strap! Stash your essentials and dare to go pear!'
        ]);
        Product::create([
            'name'=>'Amuseable Happy Boiled Egg Bag',
            'slug'=>'amuseable-happy-boiled-egg-bag',
            'description'=>'Stash your stuff and scramble!',
            'price'=>'25.00',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/egg.jpg',
            'details'=>'Amuseable Happy Boiled Egg Bag is one chipper champ! Smiley and sunny, with a strong mustard strap, soft white fur and a gorgeous golden yolk, this egg likes to dangle those scrummy cord boots as you skip along together!'
        ]);
        Product::create([
            'name'=>'Amuseable Coffee-To-Go Bag',
            'slug'=>'amuseable-coffee-to-go-bag',
            'description'=>'Get set for a whole latte fun!',
            'price'=>'25.00',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/coffee.jpg',
            'details'=>'Grab a little shot of sunshine with the Amuseable Coffee-To-Go Bag! This supercute coffee has waggly legs, a chunky cord holder and a jolly smile. With a cross-body strap and a zip-top lid, our merry mocha\'s got essentials covered!'
        ]);
        Product::create([
            'name'=>'Amuseable Chilli Bag',
            'slug'=>'amuseable-chilli-bag',
            'description'=>'Un bonito bolso!',
            'price'=>'25.00',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/chilli.jpg',
            'details'=>'Going somewhere hot? You are now, with Amuseable Chilli Bag! Spicy and smiley, this cheeky chilli has a cross-body strap, shining silver zip, vibrant fur in warm red and deep green, and cordy feet for dancing in the sun!'
        ]);
        Product::create([
            'name'=>'Amuseable Watermelon Bag',
            'slug'=>'amuseable-watermelon-bag',
            'description'=>'The one in a melon kind of bag.',
            'price'=>'22.50',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/watermelon.jpg',
            'details'=>'Look and feel like a melon bucks with the Amuseable Watermelon Bag! With its slim green strap and super soft textures, this sweet treat is the perfect accessory to freshen up any look.'
        ]);
        Product::create([
            'name'=>'Amuseable Avocado Bag Charm',
            'slug'=>'amuseable-avocado-bag-charm',
            'description'=>'Full of Vitamin Yay!',
            'price'=>'15.00',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/avocado-charm.jpg',
            'details'=>'It\'s hard not to smile at the Amuseable Avocado Bag Charm. Goofy, green and good for you, this amazingly soft charm makes dull bags delicious.'
        ]);
        Product::create([
            'name'=>'Amuseable Pear Bag Charm',
            'slug'=>'amuseable-pear-bag-charm',
            'description'=>'Psst! Got any juicy gossip?',
            'price'=>'15.00',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/pear-charm.jpg',
            'details'=>'Get cheery and chipper with the Amuseable Pear Bag Charm! This clip-on charm is the star of the orchard, in gentle green fur, with cordy boots and leaf! Full of goodness and plenty of giggles, for supercute sashays.'
        ]);
        Product::create([
            'name'=>'Amuseable Chilli Bag Charm',
            'slug'=>'amuseable-chilli-bag-charm',
            'description'=>'Your ambling amigo!',
            'price'=>'15.00',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/chilli-charm.jpg',
            'details'=>'Amuseable Chilli Bag Charm bobs along on your backpack, bringing some pep and a pop of colour! In hot orange-red with a splendid green stalk and dangling cordy boots, this clam-clip charm is a festival friend!'
        ]);
        Product::create([
            'name'=>'Amuseable Cloud Bag Charm',
            'slug'=>'amuseable-cloud-bag-charm',
            'description'=>'Cloudy, with a hit of sunshine!',
            'price'=>'15.00',
            'category_id'=>'3',
            'image'=>'images/products/amuseables/cloud-charm.jpg',
            'details'=>'Are you a bit of a dreamer? Embrace your drifter side with the Amuseable Cloud Bag Charm. This fluffy charm is super-kawaii, strokeably soft and such a statement piece. Clip it onto any boring bag.'
        ]);
    }
}
