CREATE TABLE items (
  id INT NOT NULL AUTO_INCREMENT,
  image1 VARCHAR(255) NOT NULL,
  image2 VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  price DOUBLE(10, 2) NOT NULL,
  quantity INT NOT NULL,
  category VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO items (id, image1, image2, name, description, price, quantity, category) 
VALUES 
(1, 'images/haze1.jpg',  'images/haze2.jpg', 'Hazelnut milk chocolate', 'This hazelnut milk chocolate is generously blended with Pure hazelnut paste from Italy that gives you a nutty and caramelized goodness in every bite. It is exceptionally creamy and has a melt-in-mouth texture that delivers a unique chocolate experience offering a distinctly smooth, milky and rich, gourmet taste.', 28, 5, 'milk chocolate'), 
(2, 'images/durian1.jpg',  'images/durian2.jpg', 'Musang King Durian dark chocolate', 'King of all fruits and the best you have ever tasted! It is a piece of confectionery with 100% Pure Musang King Durian flesh blended with our Belgian dark chocolate that will uniquely invade all your five senses. You can even smell the rich fragrant of Durian before you open the box! Sit back, relax and let the flavours blow you away. Perfect for Durian Lovers! A must-try for everyone!.', 28, 5, 'dark chocolate'), 
(3, 'images/teh1.jpg',  'images/teh2.jpg', 'Teh tarik milk chocolate', '“Boss! Teh tarik satu!”  A popular Malaysian mamak’s drink - Teh tarik, or so-called pulled Malaysian tea infused in our popular Belgian milk chocolate. You can now enjoy it in a chocolate form with a floral, almost earthy aftertaste.', 28, 5, 'milk chocolate'), 
(4, 'images/peanut1.jpg',  'images/peanut2.jpg', 'Jobbie peanut butter milk chocolate', 'Everyone loves a nostalgic classic, but whats even better is a classic done right! We have collaborated with famous local peanut butter guru, Jobbie in creating this masterpiece with a modern and healthier take on our First Love Chocolate with Jobbie Peanut Butter!', 28, 5, 'milk chocolate'), 
(5, 'images/soya1.jpg',  'images/soya2.jpg', 'Soya white chocolate', 'Soya may be something commonly found it street drink, but soya chocolate is different. Mixing soya with white chocolate came out with a taste that’s a bit milk-ish, and an endnote with soya aroma that lingers in your mouth and adds a little sweetness to your heart. It is another creative development where our chocolatier pairs traditional household flavour with chocolate to create infinite possibilities of tastes.', 28, 5, 'white chocolate'),
(6, 'images/mint1.jpg',  'images/mint2.jpg', 'Mint dark chocolate', 'The classic pair of love - the sensual cappuccino blend with our rich and well-bodied Belgian dark chocolate gets you in the love-spiked mood. This is your kind of chocolate to start the day off right and for the night of seduction with just a bite!', 28, 5, 'dark chocolate'), 
(7, 'images/orange1.jpg',  'images/orange2.jpg', 'Orange dark chocolate', 'That chocolate with a hint of sunshine brightens up your day with the light, citrus flavour of orange paste mixed with our rich and smooth Belgian dark chocolate giving you a delicious taste experience. Perfect for everyone and fun for kids!', 28, 5, 'dark chocolate'), 
(8, 'images/salt1.jpg',  'images/salt2.jpg', 'Seasalt caramel milk chocolate', 'A perfectly balanced combination of sweet, creamy caramel with Milk chocolates and seasoned with a pinch of sea salt to excite your taste buds in this delicious and indulgent chocolates. The enormous appeal of this sweet and salty combination is what leads to fireworks on your tongue.', 28, 5, 'milk chocolate'), 
(9, 'images/bitter1.jpg',  'images/bitter2.jpg', '70% bitter-sweet dark chocolate', 'Our best-selling dark chocolate ganache expresses the original outstanding flavor of cocoa that is crafted carefully with cacao beans from Europe. It is refined chocolate that highlights a balanced taste with an intense bitter cocoa and pleasant citrus, mild bitterness note that simply melts in your mouth! Perfect for everyone! Indulge the healthier way with our rich, balanced, and smooth bitter-sweet dark chocolates.', 28, 5, 'dark chocolate'), 
(10, 'images/sesame1.jpg',  'images/sesame2.jpg', 'Black sesame white chocolate', 'Black Sesame is a common ingredient in various cuisines, especially in Asia Countries. Our Black Sesame Dark Chocolate has a delectable taste with a dry roasted nutty aroma.', 28, 5, 'white chocolate'),
(11, 'images/capp1.jpg',  'images/capp2.jpg', 'Cappuccino dark chocolate', 'The classic pair of love - the sensual cappuccino blend with our rich and well-bodied Belgian dark chocolate gets you in the love-spiked mood. This is your kind of chocolate to start the day off right and for the night of seduction with just a bite!', 28, 5, 'dark chocolate');
