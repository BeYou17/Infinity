
<html>
    <head>

    </head>
    <body>
        <div class="box">
            <form method="POST" action="meve.php">
                <label for="game">Game:</label>
                <select name="game">
                    <option name="pubg" value="PUBG">PUBG</option>
                    <option name="cod" value="COD">COD</option>
                    <option name="among us" value="Among US">Among US</option>
                    <option name="coc" value="COC">COC</option>
                    <option name="mini" value="Mini MIlitia">Mini Militia</option>
                </select> 
                <label for="id">Event Id</label>
                <input type="text" name="id">
                <label for="event date">Event Date</label>
                <input type="date" name="edate">
                <label for="event time">Event Time</label>
                <input type="time" name="etime">
                <button type="submit">Submit </button>
            </form>
        </div>
    </body>
</html>