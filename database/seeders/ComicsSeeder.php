<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comics =  [
            [
                "title" => "Action Comics #1000: The Deluxe Edition",
                "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
                "thumb" => "https://static.dc.com/dc/files/default_images/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?w=160",
                "price" => "9.99",
                "series" => "Action Comics",
                "sale_date" => "2018-10-02",
                "type" => "comic book"
            ],
            [
                "title" => "BATMAN #132 ",
                "description" => "The mean streets of Gotham City have gotten meaner as the likes of Harvey Dent and Killer Croc roam free, brutalizing the population. Where is Batman and why hasn't he responded to the cries of a city in peril?! Can Bruce Wayne find the answers before the mysterious Red Mask captures him? And in the backup story, Tim Drake's hunt for Batman continues. Will Metropolis's newest Superman, Jon Kent, be able to help the Boy Wonder with this Multiversal mystery, or will they both run afoul of an overpowered Toyman?!",
                "thumb" => "https://static.dc.com/dc/files/default_images/BM_Cv132_13211_DIGITAL_63d0303f213176.00965000.jpg?w=160",
                "price" => "4.99",
                "series" => "Batman 2016",
                "sale_date" => "2023-02-07",
                "type" => "comic book"
            ],
            [
                "title" => "BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN #6 ",
                "description" => "Gotham City's fate hangs in the balance in this conclusion to Harley Quinn's quest to catch a serial killer! Harley knew the risks when she agreed to help the GTO capture Gotham's most savage new criminals and all her fears have come to pass. Her pursuit of Starlet and the Producer has magnified the overwhelming responsibilities of motherhood, endangered her life and loved ones and forced her to revisit the most painful memories of her own criminal past. Now, on the eve of Starlet's final spectacular act at the Gotham Film Festival, the case has become personal. As Harley grieves a shocking personal loss, she prepares to risk everything to prove she can deliver on her commitments and bring the case to a close. With one final assist from Bruce, Harley heads to center stage for a showdown that will make or break Gotham's future—and determine Harley's role within it.",
                "thumb" => "https://static.dc.com/dc/files/default_images/BMWK_HQ_06_Cover_60511ddcf28707.43858636.jpg?w=160",
                "price" => "4.99",
                "series" => "BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN 2020",
                "sale_date" => "2021-03-23",
                "type" => "comic book"
            ],
            [
                "title" => "Batman #106",
                "description" => "Following the tragic events of Infinite Frontier #1, Batman and his new ally, Ghost-Maker, must reckon with a new gang operating in Gotham City, but are they connected to the reemergence of the Scarecrow? Meanwhile, shadowy billionaire Simon Saint pitches an advanced law-enforcement system to the new mayor! The creative team behind the epic “The Joker War” returns with a thrill-packed, dangerous new storyline called “The Cowardly Lot.” Plus, the backup story “Demon or Detective” begins as Damian Wayne is on the run! After everything Damian has gone through, can he escape Gotham and find his way back to where his journey started—to his mother, Talia al Ghul? This two-part tale concludes this month in Detective Comics #1034!",
                "thumb" => "https://static.dc.com/dc/files/default_images/IAMBM_Cv18_01811_DIGITAL_63d2c3275b8056.33384810.jpg?w=640",
                "price" => "4.99",
                "series" => "BATMAN 2016",
                "sale_date" => "2021-03-02",
                "type" => "comic book"
            ],
            [
                "title" => "AQUAMAN #21 ",
                "description" => "\"With the Fishes,\" Part 1 of 3. \"Sub Diego\" faces a new wave of crime as a meta-powered criminal caught in the collapse finds his powers even more formidable in his watery new home!",
                "thumb" => "https://static.dc.com/dc/files/default_images/aquaman_v6_21_5b15613272bb82.72961266.jpg?w=640",
                "price" => "2.50",
                "series" => "AQUAMAN 2003",
                "sale_date" => "2004-08-11",
                "type" => "comic book"
            ],
            [
                "title" => "SUICIDE SQUAD VOL. 7: DRAIN THE SWAMP ",
                "description" => "When a new threat threatens the Earth, the Suicide Squad is called into action—along with a new member! But who is the mysterious Juan? And what are his powers? Then, there is a foe who knows their weaknesses and secrets. A foe who knows this ragtag group of antiheroes better than they know themselves. It's their former teammate, Hack! But...isn't she supposed to be dead? How is Hack back? And what are her plans for the Suicide Squad? Collects issues #33-40.",
                "thumb" => "https://static.dc.com/dc/files/default_images/SUSQv7_DTS_194-001_HD_5bb7fbfe5dfef6.89620192.jpg?w=640",
                "price" => "19.99",
                "series" => "SUICIDE SQUAD 2016",
                "sale_date" => "2016-10-26",
                "type" => "graphic novel"
            ],
            [
                "title" => "GREEN LANTERN/GREEN ARROW: SPACE TRAVELING HEROES ",
                "description" => "In these team-up tales from the mid-1970s, Green Lantern and Green Arrow face fantastic threats, starting with the former Green Lantern known as Sinestro! Also in this collection, Green Lantern Katma Tui pursues a monstrous beast to Earth, and Green Arrow accidentally enters Green Lantern's Lantern and becomes cosmically charged. Plus, the Golden Age hero called Air Wave returns in a new guise, as Hal Jordan's young cousin, and Green Arrow's romantic relationship with Black Canary takes some unexpected turns. Collects Green Lantern #90-106.",
                "thumb" => "https://static.dc.com/dc/files/default_images/GLGA_STH_338-001_HD_5f04f98023f2b5.75507971.jpg?w=640",
                "price" => "49.99",
                "series" => "GREEN LANTERN/GREEN ARROW",
                "sale_date" => "2019-08-28",
                "type" => "graphic novel"
            ],
            [
                "title" => "SUPERGIRL #0 ",
                "description" => "On the eve of Krypton's destruction, who sent Supergirl from Krypton to Earth - and why? The answer is not what you think! Plus: Learn the answer to a mystery that's been driving Supergirl mad for months: Who shot her father, Zor-El?!",
                "thumb" => "https://static.dc.com/dc/files/default_images/supergirl_0_5bb25f38a01506.62225237.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERGIRL 2011",
                "sale_date" => "2011-09-19",
                "type" => "comic book"
            ],
            [
                "title" => "BATGIRL #0",
                "description" => "How did Barbara first become Batgirl? What led to her to don the cape and cowl? Witness Barbara Gordon's shocking injury and her inspiring drive to recover and walk again!",
                "thumb" => "https://static.dc.com/dc/files/default_images/batgirl_0_5bb25f4d26cb59.49552719.jpg?w=640",
                "price" => "2.99",
                "series" => "BATGIRL",
                "sale_date" => "2021-09-12",
                "type" => "comic book"
            ],
            [
                "title" => "SUPERGIRL #40",
                "description" => "It's time for final exams at the Crucible Academy – and they may just spell the death of Supergirl! ",
                "thumb" => "https://static.dc.com/dc/files/default_images/supergirl_v6_40_5b16c4013f6d47.17011948.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERGIRL",
                "sale_date" => "2015-03-18",
                "type" => "comic book"
            ],
            [
                "title" => "BATGIRL #50",
                "description" => "The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier’s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham’s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.",
                "thumb" => "https://static.dc.com/dc/files/default_images/batgirl_v4_50_5b15d60306afe0.02294409.jpg?w=640",
                "price" => "4.99",
                "series" => "BATGIRL 2011",
                "sale_date" => "2016-04-06",
                "type" => "comic book"
            ],
            [
                "title" => "SUPERBOY #0",
                "description" => "Mysteries are revealed as we learn Harvest's reasons for creating Kryptonian clones! This bloody chapter of Superboy's history ties directly into issue #1 of the series – and the future of the entire DC Universe!",
                "thumb" => "https://static.dc.com/dc/files/default_images/superboy_0_5bb25f2f6ea5b3.55885988.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERBOY",
                "sale_date" => "2012-09-12",
                "type" => "comic book"
            ],
            [
                "title" => "Action Comics #1000: The Deluxe Edition",
                "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
                "thumb" => "https://static.dc.com/dc/files/default_images/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?w=160",
                "price" => "9.99",
                "series" => "Action Comics",
                "sale_date" => "2018-10-02",
                "type" => "comic book"
            ],
            [
                "title" => "BATMAN #132 ",
                "description" => "The mean streets of Gotham City have gotten meaner as the likes of Harvey Dent and Killer Croc roam free, brutalizing the population. Where is Batman and why hasn't he responded to the cries of a city in peril?! Can Bruce Wayne find the answers before the mysterious Red Mask captures him? And in the backup story, Tim Drake's hunt for Batman continues. Will Metropolis's newest Superman, Jon Kent, be able to help the Boy Wonder with this Multiversal mystery, or will they both run afoul of an overpowered Toyman?!",
                "thumb" => "https://static.dc.com/dc/files/default_images/BM_Cv132_13211_DIGITAL_63d0303f213176.00965000.jpg?w=160",
                "price" => "4.99",
                "series" => "Batman 2016",
                "sale_date" => "2023-02-07",
                "type" => "comic book"
            ],
            [
                "title" => "BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN #6 ",
                "description" => "Gotham City's fate hangs in the balance in this conclusion to Harley Quinn's quest to catch a serial killer! Harley knew the risks when she agreed to help the GTO capture Gotham's most savage new criminals and all her fears have come to pass. Her pursuit of Starlet and the Producer has magnified the overwhelming responsibilities of motherhood, endangered her life and loved ones and forced her to revisit the most painful memories of her own criminal past. Now, on the eve of Starlet's final spectacular act at the Gotham Film Festival, the case has become personal. As Harley grieves a shocking personal loss, she prepares to risk everything to prove she can deliver on her commitments and bring the case to a close. With one final assist from Bruce, Harley heads to center stage for a showdown that will make or break Gotham's future—and determine Harley's role within it.",
                "thumb" => "https://static.dc.com/dc/files/default_images/BMWK_HQ_06_Cover_60511ddcf28707.43858636.jpg?w=160",
                "price" => "4.99",
                "series" => "BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN 2020",
                "sale_date" => "2021-03-23",
                "type" => "comic book"
            ],
            [
                "title" => "Batman #106",
                "description" => "Following the tragic events of Infinite Frontier #1, Batman and his new ally, Ghost-Maker, must reckon with a new gang operating in Gotham City, but are they connected to the reemergence of the Scarecrow? Meanwhile, shadowy billionaire Simon Saint pitches an advanced law-enforcement system to the new mayor! The creative team behind the epic “The Joker War” returns with a thrill-packed, dangerous new storyline called “The Cowardly Lot.” Plus, the backup story “Demon or Detective” begins as Damian Wayne is on the run! After everything Damian has gone through, can he escape Gotham and find his way back to where his journey started—to his mother, Talia al Ghul? This two-part tale concludes this month in Detective Comics #1034!",
                "thumb" => "https://static.dc.com/dc/files/default_images/IAMBM_Cv18_01811_DIGITAL_63d2c3275b8056.33384810.jpg?w=640",
                "price" => "4.99",
                "series" => "BATMAN 2016",
                "sale_date" => "2021-03-02",
                "type" => "comic book"
            ],
            [
                "title" => "AQUAMAN #21 ",
                "description" => "\"With the Fishes,\" Part 1 of 3. \"Sub Diego\" faces a new wave of crime as a meta-powered criminal caught in the collapse finds his powers even more formidable in his watery new home!",
                "thumb" => "https://static.dc.com/dc/files/default_images/aquaman_v6_21_5b15613272bb82.72961266.jpg?w=640",
                "price" => "2.50",
                "series" => "AQUAMAN 2003",
                "sale_date" => "2004-08-11",
                "type" => "comic book"
            ],
            [
                "title" => "SUICIDE SQUAD VOL. 7: DRAIN THE SWAMP ",
                "description" => "When a new threat threatens the Earth, the Suicide Squad is called into action—along with a new member! But who is the mysterious Juan? And what are his powers? Then, there is a foe who knows their weaknesses and secrets. A foe who knows this ragtag group of antiheroes better than they know themselves. It's their former teammate, Hack! But...isn't she supposed to be dead? How is Hack back? And what are her plans for the Suicide Squad? Collects issues #33-40.",
                "thumb" => "https://static.dc.com/dc/files/default_images/SUSQv7_DTS_194-001_HD_5bb7fbfe5dfef6.89620192.jpg?w=640",
                "price" => "19.99",
                "series" => "SUICIDE SQUAD 2016",
                "sale_date" => "2016-10-26",
                "type" => "graphic novel"
            ],
            [
                "title" => "GREEN LANTERN/GREEN ARROW: SPACE TRAVELING HEROES ",
                "description" => "In these team-up tales from the mid-1970s, Green Lantern and Green Arrow face fantastic threats, starting with the former Green Lantern known as Sinestro! Also in this collection, Green Lantern Katma Tui pursues a monstrous beast to Earth, and Green Arrow accidentally enters Green Lantern's Lantern and becomes cosmically charged. Plus, the Golden Age hero called Air Wave returns in a new guise, as Hal Jordan's young cousin, and Green Arrow's romantic relationship with Black Canary takes some unexpected turns. Collects Green Lantern #90-106.",
                "thumb" => "https://static.dc.com/dc/files/default_images/GLGA_STH_338-001_HD_5f04f98023f2b5.75507971.jpg?w=640",
                "price" => "49.99",
                "series" => "GREEN LANTERN/GREEN ARROW",
                "sale_date" => "2019-08-28",
                "type" => "graphic novel"
            ],
            [
                "title" => "SUPERGIRL #0 ",
                "description" => "On the eve of Krypton's destruction, who sent Supergirl from Krypton to Earth - and why? The answer is not what you think! Plus: Learn the answer to a mystery that's been driving Supergirl mad for months: Who shot her father, Zor-El?!",
                "thumb" => "https://static.dc.com/dc/files/default_images/supergirl_0_5bb25f38a01506.62225237.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERGIRL 2011",
                "sale_date" => "2011-09-19",
                "type" => "comic book"
            ],
            [
                "title" => "BATGIRL #0",
                "description" => "How did Barbara first become Batgirl? What led to her to don the cape and cowl? Witness Barbara Gordon's shocking injury and her inspiring drive to recover and walk again!",
                "thumb" => "https://static.dc.com/dc/files/default_images/batgirl_0_5bb25f4d26cb59.49552719.jpg?w=640",
                "price" => "2.99",
                "series" => "BATGIRL",
                "sale_date" => "2021-09-12",
                "type" => "comic book"
            ],
            [
                "title" => "SUPERGIRL #40",
                "description" => "It's time for final exams at the Crucible Academy – and they may just spell the death of Supergirl! ",
                "thumb" => "https://static.dc.com/dc/files/default_images/supergirl_v6_40_5b16c4013f6d47.17011948.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERGIRL",
                "sale_date" => "2015-03-18",
                "type" => "comic book"
            ],
            [
                "title" => "BATGIRL #50",
                "description" => "The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier’s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham’s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.",
                "thumb" => "https://static.dc.com/dc/files/default_images/batgirl_v4_50_5b15d60306afe0.02294409.jpg?w=640",
                "price" => "4.99",
                "series" => "BATGIRL 2011",
                "sale_date" => "2016-04-06",
                "type" => "comic book"
            ],
            [
                "title" => "SUPERBOY #0",
                "description" => "Mysteries are revealed as we learn Harvest's reasons for creating Kryptonian clones! This bloody chapter of Superboy's history ties directly into issue #1 of the series – and the future of the entire DC Universe!",
                "thumb" => "https://static.dc.com/dc/files/default_images/superboy_0_5bb25f2f6ea5b3.55885988.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERBOY",
                "sale_date" => "2012-09-12",
                "type" => "comic book"
            ],
            [
                "title" => "Action Comics #1000: The Deluxe Edition",
                "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
                "thumb" => "https://static.dc.com/dc/files/default_images/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?w=160",
                "price" => "9.99",
                "series" => "Action Comics",
                "sale_date" => "2018-10-02",
                "type" => "comic book"
            ],
            [
                "title" => "BATMAN #132 ",
                "description" => "The mean streets of Gotham City have gotten meaner as the likes of Harvey Dent and Killer Croc roam free, brutalizing the population. Where is Batman and why hasn't he responded to the cries of a city in peril?! Can Bruce Wayne find the answers before the mysterious Red Mask captures him? And in the backup story, Tim Drake's hunt for Batman continues. Will Metropolis's newest Superman, Jon Kent, be able to help the Boy Wonder with this Multiversal mystery, or will they both run afoul of an overpowered Toyman?!",
                "thumb" => "https://static.dc.com/dc/files/default_images/BM_Cv132_13211_DIGITAL_63d0303f213176.00965000.jpg?w=160",
                "price" => "4.99",
                "series" => "Batman 2016",
                "sale_date" => "2023-02-07",
                "type" => "comic book"
            ],
            [
                "title" => "BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN #6 ",
                "description" => "Gotham City's fate hangs in the balance in this conclusion to Harley Quinn's quest to catch a serial killer! Harley knew the risks when she agreed to help the GTO capture Gotham's most savage new criminals and all her fears have come to pass. Her pursuit of Starlet and the Producer has magnified the overwhelming responsibilities of motherhood, endangered her life and loved ones and forced her to revisit the most painful memories of her own criminal past. Now, on the eve of Starlet's final spectacular act at the Gotham Film Festival, the case has become personal. As Harley grieves a shocking personal loss, she prepares to risk everything to prove she can deliver on her commitments and bring the case to a close. With one final assist from Bruce, Harley heads to center stage for a showdown that will make or break Gotham's future—and determine Harley's role within it.",
                "thumb" => "https://static.dc.com/dc/files/default_images/BMWK_HQ_06_Cover_60511ddcf28707.43858636.jpg?w=160",
                "price" => "4.99",
                "series" => "BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN 2020",
                "sale_date" => "2021-03-23",
                "type" => "comic book"
            ],
            [
                "title" => "Batman #106",
                "description" => "Following the tragic events of Infinite Frontier #1, Batman and his new ally, Ghost-Maker, must reckon with a new gang operating in Gotham City, but are they connected to the reemergence of the Scarecrow? Meanwhile, shadowy billionaire Simon Saint pitches an advanced law-enforcement system to the new mayor! The creative team behind the epic “The Joker War” returns with a thrill-packed, dangerous new storyline called “The Cowardly Lot.” Plus, the backup story “Demon or Detective” begins as Damian Wayne is on the run! After everything Damian has gone through, can he escape Gotham and find his way back to where his journey started—to his mother, Talia al Ghul? This two-part tale concludes this month in Detective Comics #1034!",
                "thumb" => "https://static.dc.com/dc/files/default_images/IAMBM_Cv18_01811_DIGITAL_63d2c3275b8056.33384810.jpg?w=640",
                "price" => "4.99",
                "series" => "BATMAN 2016",
                "sale_date" => "2021-03-02",
                "type" => "comic book"
            ],
            [
                "title" => "AQUAMAN #21 ",
                "description" => "\"With the Fishes,\" Part 1 of 3. \"Sub Diego\" faces a new wave of crime as a meta-powered criminal caught in the collapse finds his powers even more formidable in his watery new home!",
                "thumb" => "https://static.dc.com/dc/files/default_images/aquaman_v6_21_5b15613272bb82.72961266.jpg?w=640",
                "price" => "2.50",
                "series" => "AQUAMAN 2003",
                "sale_date" => "2004-08-11",
                "type" => "comic book"
            ],
            [
                "title" => "SUICIDE SQUAD VOL. 7: DRAIN THE SWAMP ",
                "description" => "When a new threat threatens the Earth, the Suicide Squad is called into action—along with a new member! But who is the mysterious Juan? And what are his powers? Then, there is a foe who knows their weaknesses and secrets. A foe who knows this ragtag group of antiheroes better than they know themselves. It's their former teammate, Hack! But...isn't she supposed to be dead? How is Hack back? And what are her plans for the Suicide Squad? Collects issues #33-40.",
                "thumb" => "https://static.dc.com/dc/files/default_images/SUSQv7_DTS_194-001_HD_5bb7fbfe5dfef6.89620192.jpg?w=640",
                "price" => "19.99",
                "series" => "SUICIDE SQUAD 2016",
                "sale_date" => "2016-10-26",
                "type" => "graphic novel"
            ],
            [
                "title" => "GREEN LANTERN/GREEN ARROW: SPACE TRAVELING HEROES ",
                "description" => "In these team-up tales from the mid-1970s, Green Lantern and Green Arrow face fantastic threats, starting with the former Green Lantern known as Sinestro! Also in this collection, Green Lantern Katma Tui pursues a monstrous beast to Earth, and Green Arrow accidentally enters Green Lantern's Lantern and becomes cosmically charged. Plus, the Golden Age hero called Air Wave returns in a new guise, as Hal Jordan's young cousin, and Green Arrow's romantic relationship with Black Canary takes some unexpected turns. Collects Green Lantern #90-106.",
                "thumb" => "https://static.dc.com/dc/files/default_images/GLGA_STH_338-001_HD_5f04f98023f2b5.75507971.jpg?w=640",
                "price" => "49.99",
                "series" => "GREEN LANTERN/GREEN ARROW",
                "sale_date" => "2019-08-28",
                "type" => "graphic novel"
            ],
            [
                "title" => "SUPERGIRL #0 ",
                "description" => "On the eve of Krypton's destruction, who sent Supergirl from Krypton to Earth - and why? The answer is not what you think! Plus: Learn the answer to a mystery that's been driving Supergirl mad for months: Who shot her father, Zor-El?!",
                "thumb" => "https://static.dc.com/dc/files/default_images/supergirl_0_5bb25f38a01506.62225237.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERGIRL 2011",
                "sale_date" => "2011-09-19",
                "type" => "comic book"
            ],
            [
                "title" => "BATGIRL #0",
                "description" => "How did Barbara first become Batgirl? What led to her to don the cape and cowl? Witness Barbara Gordon's shocking injury and her inspiring drive to recover and walk again!",
                "thumb" => "https://static.dc.com/dc/files/default_images/batgirl_0_5bb25f4d26cb59.49552719.jpg?w=640",
                "price" => "2.99",
                "series" => "BATGIRL",
                "sale_date" => "2021-09-12",
                "type" => "comic book"
            ],
            [
                "title" => "SUPERGIRL #40",
                "description" => "It's time for final exams at the Crucible Academy – and they may just spell the death of Supergirl! ",
                "thumb" => "https://static.dc.com/dc/files/default_images/supergirl_v6_40_5b16c4013f6d47.17011948.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERGIRL",
                "sale_date" => "2015-03-18",
                "type" => "comic book"
            ],
            [
                "title" => "BATGIRL #50",
                "description" => "The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier’s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham’s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.",
                "thumb" => "https://static.dc.com/dc/files/default_images/batgirl_v4_50_5b15d60306afe0.02294409.jpg?w=640",
                "price" => "4.99",
                "series" => "BATGIRL 2011",
                "sale_date" => "2016-04-06",
                "type" => "comic book"
            ],
            [
                "title" => "SUPERBOY #0",
                "description" => "Mysteries are revealed as we learn Harvest's reasons for creating Kryptonian clones! This bloody chapter of Superboy's history ties directly into issue #1 of the series – and the future of the entire DC Universe!",
                "thumb" => "https://static.dc.com/dc/files/default_images/superboy_0_5bb25f2f6ea5b3.55885988.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERBOY",
                "sale_date" => "2012-09-12",
                "type" => "comic book"
            ],
            [
                "title" => "Action Comics #1000: The Deluxe Edition",
                "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
                "thumb" => "https://static.dc.com/dc/files/default_images/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?w=160",
                "price" => "9.99",
                "series" => "Action Comics",
                "sale_date" => "2018-10-02",
                "type" => "comic book"
            ],
            [
                "title" => "BATMAN #132 ",
                "description" => "The mean streets of Gotham City have gotten meaner as the likes of Harvey Dent and Killer Croc roam free, brutalizing the population. Where is Batman and why hasn't he responded to the cries of a city in peril?! Can Bruce Wayne find the answers before the mysterious Red Mask captures him? And in the backup story, Tim Drake's hunt for Batman continues. Will Metropolis's newest Superman, Jon Kent, be able to help the Boy Wonder with this Multiversal mystery, or will they both run afoul of an overpowered Toyman?!",
                "thumb" => "https://static.dc.com/dc/files/default_images/BM_Cv132_13211_DIGITAL_63d0303f213176.00965000.jpg?w=160",
                "price" => "4.99",
                "series" => "Batman 2016",
                "sale_date" => "2023-02-07",
                "type" => "comic book"
            ],
            [
                "title" => "BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN #6 ",
                "description" => "Gotham City's fate hangs in the balance in this conclusion to Harley Quinn's quest to catch a serial killer! Harley knew the risks when she agreed to help the GTO capture Gotham's most savage new criminals and all her fears have come to pass. Her pursuit of Starlet and the Producer has magnified the overwhelming responsibilities of motherhood, endangered her life and loved ones and forced her to revisit the most painful memories of her own criminal past. Now, on the eve of Starlet's final spectacular act at the Gotham Film Festival, the case has become personal. As Harley grieves a shocking personal loss, she prepares to risk everything to prove she can deliver on her commitments and bring the case to a close. With one final assist from Bruce, Harley heads to center stage for a showdown that will make or break Gotham's future—and determine Harley's role within it.",
                "thumb" => "https://static.dc.com/dc/files/default_images/BMWK_HQ_06_Cover_60511ddcf28707.43858636.jpg?w=160",
                "price" => "4.99",
                "series" => "BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN 2020",
                "sale_date" => "2021-03-23",
                "type" => "comic book"
            ],
            [
                "title" => "Batman #106",
                "description" => "Following the tragic events of Infinite Frontier #1, Batman and his new ally, Ghost-Maker, must reckon with a new gang operating in Gotham City, but are they connected to the reemergence of the Scarecrow? Meanwhile, shadowy billionaire Simon Saint pitches an advanced law-enforcement system to the new mayor! The creative team behind the epic “The Joker War” returns with a thrill-packed, dangerous new storyline called “The Cowardly Lot.” Plus, the backup story “Demon or Detective” begins as Damian Wayne is on the run! After everything Damian has gone through, can he escape Gotham and find his way back to where his journey started—to his mother, Talia al Ghul? This two-part tale concludes this month in Detective Comics #1034!",
                "thumb" => "https://static.dc.com/dc/files/default_images/IAMBM_Cv18_01811_DIGITAL_63d2c3275b8056.33384810.jpg?w=640",
                "price" => "4.99",
                "series" => "BATMAN 2016",
                "sale_date" => "2021-03-02",
                "type" => "comic book"
            ],
            [
                "title" => "AQUAMAN #21 ",
                "description" => "\"With the Fishes,\" Part 1 of 3. \"Sub Diego\" faces a new wave of crime as a meta-powered criminal caught in the collapse finds his powers even more formidable in his watery new home!",
                "thumb" => "https://static.dc.com/dc/files/default_images/aquaman_v6_21_5b15613272bb82.72961266.jpg?w=640",
                "price" => "2.50",
                "series" => "AQUAMAN 2003",
                "sale_date" => "2004-08-11",
                "type" => "comic book"
            ],
            [
                "title" => "SUICIDE SQUAD VOL. 7: DRAIN THE SWAMP ",
                "description" => "When a new threat threatens the Earth, the Suicide Squad is called into action—along with a new member! But who is the mysterious Juan? And what are his powers? Then, there is a foe who knows their weaknesses and secrets. A foe who knows this ragtag group of antiheroes better than they know themselves. It's their former teammate, Hack! But...isn't she supposed to be dead? How is Hack back? And what are her plans for the Suicide Squad? Collects issues #33-40.",
                "thumb" => "https://static.dc.com/dc/files/default_images/SUSQv7_DTS_194-001_HD_5bb7fbfe5dfef6.89620192.jpg?w=640",
                "price" => "19.99",
                "series" => "SUICIDE SQUAD 2016",
                "sale_date" => "2016-10-26",
                "type" => "graphic novel"
            ],
            [
                "title" => "GREEN LANTERN/GREEN ARROW: SPACE TRAVELING HEROES ",
                "description" => "In these team-up tales from the mid-1970s, Green Lantern and Green Arrow face fantastic threats, starting with the former Green Lantern known as Sinestro! Also in this collection, Green Lantern Katma Tui pursues a monstrous beast to Earth, and Green Arrow accidentally enters Green Lantern's Lantern and becomes cosmically charged. Plus, the Golden Age hero called Air Wave returns in a new guise, as Hal Jordan's young cousin, and Green Arrow's romantic relationship with Black Canary takes some unexpected turns. Collects Green Lantern #90-106.",
                "thumb" => "https://static.dc.com/dc/files/default_images/GLGA_STH_338-001_HD_5f04f98023f2b5.75507971.jpg?w=640",
                "price" => "49.99",
                "series" => "GREEN LANTERN/GREEN ARROW",
                "sale_date" => "2019-08-28",
                "type" => "graphic novel"
            ],
            [
                "title" => "SUPERGIRL #0 ",
                "description" => "On the eve of Krypton's destruction, who sent Supergirl from Krypton to Earth - and why? The answer is not what you think! Plus: Learn the answer to a mystery that's been driving Supergirl mad for months: Who shot her father, Zor-El?!",
                "thumb" => "https://static.dc.com/dc/files/default_images/supergirl_0_5bb25f38a01506.62225237.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERGIRL 2011",
                "sale_date" => "2011-09-19",
                "type" => "comic book"
            ],
            [
                "title" => "BATGIRL #0",
                "description" => "How did Barbara first become Batgirl? What led to her to don the cape and cowl? Witness Barbara Gordon's shocking injury and her inspiring drive to recover and walk again!",
                "thumb" => "https://static.dc.com/dc/files/default_images/batgirl_0_5bb25f4d26cb59.49552719.jpg?w=640",
                "price" => "2.99",
                "series" => "BATGIRL",
                "sale_date" => "2021-09-12",
                "type" => "comic book"
            ],
            [
                "title" => "SUPERGIRL #40",
                "description" => "It's time for final exams at the Crucible Academy – and they may just spell the death of Supergirl! ",
                "thumb" => "https://static.dc.com/dc/files/default_images/supergirl_v6_40_5b16c4013f6d47.17011948.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERGIRL",
                "sale_date" => "2015-03-18",
                "type" => "comic book"
            ],
            [
                "title" => "BATGIRL #50",
                "description" => "The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier’s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham’s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.",
                "thumb" => "https://static.dc.com/dc/files/default_images/batgirl_v4_50_5b15d60306afe0.02294409.jpg?w=640",
                "price" => "4.99",
                "series" => "BATGIRL 2011",
                "sale_date" => "2016-04-06",
                "type" => "comic book"
            ],
            [
                "title" => "SUPERBOY #0",
                "description" => "Mysteries are revealed as we learn Harvest's reasons for creating Kryptonian clones! This bloody chapter of Superboy's history ties directly into issue #1 of the series – and the future of the entire DC Universe!",
                "thumb" => "https://static.dc.com/dc/files/default_images/superboy_0_5bb25f2f6ea5b3.55885988.jpg?w=640",
                "price" => "2.99",
                "series" => "SUPERBOY",
                "sale_date" => "2012-09-12",
                "type" => "comic book"
            ],
        ];

        foreach($comics as $comicToAdd){
            $comic = new Comic();
            $comic->title = $comicToAdd['title'];
            $comic->description = $comicToAdd['description'];
            $comic->thumb = $comicToAdd['thumb'];
            $comic->price = $comicToAdd['price'];
            $comic->series = $comicToAdd['series'];
            $comic->sale_date = $comicToAdd['sale_date'];
            $comic->type = $comicToAdd['type'];
            $comic->save();
        }
    }
}
