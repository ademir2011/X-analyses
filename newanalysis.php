<center>
    
    <br/>
    
    <div style="font-size: 30px">
        New Analysis
    </div>
    
    <br/>
    
    <div style="font-size: 20px">
        Upload a file, select all the plots you want and the desired p-value. After that, press "Perform analysis and we'll analyze your data
    </div>
    
    <br/>
    
    <form action="teste.php" method="POST">
    
        <table>
        <tr>
            <td>Choose your file</td>
            <td></td>
            <td>
                <input type="file" name="fileToUpload" id="fileToUpload" value="Select your file...">
            </td>
        </tr>
        <tr>
            <td>Select the plots you want</td>
            <td>
                <table>
                    <tr><td> HeatMap </td></tr>
                    <tr><td> VulcanPlot </td></tr>
                    <tr><td> Dendogram </td></tr>
                </table>
            </td>
            <td>
                <table>
                    
                    <tr><td> 
                        
                    <label for="switch1" class="mdl-switch mdl-js-switch mdl-js-ripple-effect">
                        <input type="checkbox" id="switch1" class="mdl-switch__input">
                    </label>
                            
                    </td></tr>
                    
                    <tr><td> 
                        
                    <label for="switch2" class="mdl-switch mdl-js-switch mdl-js-ripple-effect">
                        <input type="checkbox" id="switch2" class="mdl-switch__input">
                    </label>
                            
                    </td></tr>
                    
                    <tr><td> 
                        
                    <label for="switch3" class="mdl-switch mdl-js-switch mdl-js-ripple-effect">
                        <input type="checkbox" id="switch3" class="mdl-switch__input">
                    </label>
                            
                    </td></tr>
                   
                </table>
            </td>
        </tr>
        <tr>
            <td>Select the desired p-value</td>
            <td></td>
            <td>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
                    <label class="mdl-textfield__label" for="sample4">p-value...</label>
                    <span class="mdl-textfield__error">Input is not a number!</span>
                </div>
            </td>
        </tr>
        
    </form>
    
    </table>
    
    <br/>
    
    <!-- Raised button -->
    <button class="mdl-button mdl-js-button mdl-button--raised">
        Perform analysis
    </button>

    
</center>

    


