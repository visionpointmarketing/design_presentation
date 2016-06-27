
This tool is built with reveal.js and is used to display design presentations for VisionPoint Marketing. The only files that need editing are those within the slides directory. The clientname.php file needs to be updated with the correct client name, the directories can be renamed to better label the different rows within the presentation, but will always need to begin with a number, which represents the custom ordering of the rows within the presentation. Each folder within the slides directory represents a row within the presentation. Images within these folders then need to be numbered based on teh column they fall into. For example, 4.png in the folder 2second will fall in the second row of the fourth column of the presentation.

The following is an example of how files can be laid out:
_________________________________________________________________________
|        |        |        |        |        |        |        |        |
| 1first | 1first | 1first | 1first | 1first | 1first | 1first | 1first |
| 1.png  | 2.png  | 3.png  | 4.png  | 5.png  | 6.png  | 7.png  | 8.png  |
|________|________|________|________|________|________|________|________|
|        |        |        |        |        |        |        |        |
| 2second| 2second|        |        | 2second| 2second|        | 2second|
| 1.png  | 2.png  |        |        | 5.png  | 6.png  |        | 8.png  |
|________|________|________|________|________|________|________|________|
|        |        |        |        |        |        |        |        |
| 3third |        |        |        |        |        | 3third | 3third |
| 1.png  |        |        |        |        |        | 7.png  | 8.png  |
|________|________|________|________|________|________|________|________|
