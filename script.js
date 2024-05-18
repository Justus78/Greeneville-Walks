var quotes = [
  '"The mountains are calling and I must go." - John Muir',
  '"I like this place and could willingly waste my time in it." -William Shakespeare',
  '"Adopt the pace of nature: her secret is patience." -Ralph Waldo Emerson',
  '"Live in each season as it passes; breathe the air, drink the drink, taste the fruit, and resign yourself to the influence of the earth." -Henry David Thoreau, Walden',
  '"The creation of a thousand forests is in one acorn" -Ralph Waldo Emerson',
  '"A man doesn\'t plant a tree for himself. He plants it for posterity." -Alexander Smith',
  '"The best time to plant a tree was 20 years ago. The next best time is now." -Chinese Proverb',
  '"He will be like a tree firmly planted by streams of water, which yields its fruit in its season its leaf does not wither; and in whatever he does, he prospers." -Psalms 1:3',
  '"A man watches his pear tree day after day, impatient for the ripening of the fruit. Let him attempt to force the process, and he may spoil both fruit and tree. But let him patiently wait, and the ripe pear at length falls into his lap." -Abraham Lincoln',
  '"Trees are as close to immortality as the rest of us ever come." ― Karen Joy Fowler',
  "'You know me, I think there ought to be a big old tree right there. And let's give him a friend. Everybody needs a friend.' ― Bob Ross", 
  '"The true meaning of life is to plant trees; under whose shade you do not expect to sit." ― Nelson Henderson',
  '“The kingdom of heaven is like a mustard seed, which a man took and planted in his field. 32 Though it is the smallest of all seeds, yet when it grows, it is the largest of garden plants and becomes a tree, so that the birds come and perch in its branches.” — Matthew 13:31–32',
  '"Love is like a tree, it grows of its own accord, it puts down deep roots into our whole being." ― Victor Hugo',
  "'Until you dig a hole, you plant a tree, you water it and make it survive, you haven't done a thing. You are just talking.' ― Wangari Maathai",
  '"I feel a great regard for trees; they represent age and beauty and the miracles of life and growth." ― Louise Dickinson Rich',
  "'This oak tree and me, we're made of the same stuff.' ― Carl Sagan",
  '"Then God said, "Let the land produce vegetation: seed-bearing plants and trees on the land that bear fruit with seed in it, according to their various kinds." And it was so. - Genesis 1:11',
  '"Trees exhale for us so that we can inhale them to stay alive. Can we ever forget that? Let us love trees with every breath we take until we perish." ― Munia Khan',
  '"Between every two pines is a doorway to a new world." ― John Muir',
  '"Love the trees until their leaves fall off, then encourage them to try again next year." ― Chad Sugg',
  '"The creation of a thousand forests is in one acorn." ― Ralph Waldo Emerson',
  '"In a forest of a hundred thousand trees, no two leaves are alike. And no two journeys along the same path are alike." — Paolo Coelho',
  '"And he shall be like a tree planted by the rivers of water that bringeth forth his fruit in his season; his leaf also shall not wither, and whatsoever he doeth shall prosper." – Psalm 1:3',
  '"Nature is not a place to visit, it is home."  — Gary Snyder',
  '“Time spent amongst trees is never wasted time.” — Katrina Mayer',
  '“A walk in nature walks the soul back home.”  — Mary Davis',
  '"I firmly believe that nature brings solace in all troubles."  — Anne Frank',
  '“In nature, nothing is perfect and everything is perfect. Trees can be contorted, bent in weird ways, and they’re still beautiful.” — Alice Walker',
  '“Trees are poems that the earth writes upon the sky.” — Kahlil Gabran',
  '“To be without trees would, in the most literal way, to be without our roots.” — Richard Mabey',
  '“He that plants trees, loves others besides himself.”  — Thomas Fuller',
  '“Look deep into nature, and then you will start to understand everything better.” — Albert Einstein',
  '“Go forth under the open sky and listen to nature’s teachings.” — William Cullen Bryant',
  '“The clearest way into the universe is through a forest wilderness.” — John Muir',
  '“Change is never easy and it often creates discord. But when people come together for the good of humanity and the earth, we can accomplish great things.” — David Suzuki'

]

function newQuote(){
  var currentQuote = (Math.floor(Math.random() * quotes.length));
  document.getElementById("quoteBox").innerHTML = "<p class='card-text text-truncate'>" + quotes[currentQuote] + "</p>";
}

document.addEventListener('DOMContentLoaded', function() {
    newQuote();
}, false);


//slide show//

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('slideshow');
  var dots = document.getElementsByClassName('dot');
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(' active', '');
  }
  slides[slideIndex-1].style.display = 'block';
  dots[slideIndex-1].className += ' active';
}
