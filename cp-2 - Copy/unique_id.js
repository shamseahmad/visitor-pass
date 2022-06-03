function dateCall(){
    Date.prototype.yyyymmdd = function() {
        var mm = this.getMonth() + 1; // getMonth() is zero-based
        var dd = this.getDate();
    
        return [this.getFullYear(),
                (mm>9 ? '' : '0') + mm,
                (dd>9 ? '' : '0') + dd].join("");
    };
    var date = new Date();
    date.yyyymmdd();
        var date = new Date();
        var i = 1;
        z = 1000+i;
        return (date.yyyymmdd()+z);
        i++;
    }

    document.getElementById("dat").innerHTML =dateCall();