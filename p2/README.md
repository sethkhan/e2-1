
# Project 2
+ By: Susan Buck
+ Production URL: <http://p2.hesweb.xyz>

## Game planning
* Define a winner variable, that is null to start with
* Player A randomly picks a coin side - heads or tails
    * Create an array with two values: heads and tails
    * Use the rand function to randomly choose a key, 0 or 1
    * Use that to extract `heads` or `tails` from the array
* A coin is randomly “flipped”, “landing” on either heads or tails.
    * Repeat the above steps, this time for the coin flip
* If the coin landed on the same side Player A choose, they win.
    * Compare the coin flip to the Player A's choice, and if they are the same, set the winner to be Player A
    * Otherwise, set the winner to be Player B

## Outside resources

## Notes for instructor
