function valida_CPF(oSrc,args){

    s = args.Value;

    //args.isValid = (s >= 3);

    //document.write(oSrc.Value + ‘,’ + args.Value);

    if (isNaN(s)) {

        return args.IsValid = false;

    }

    var i;

    var c = s.substr(0,9);

    var dv = s.substr(9,2);

    var d1 = 0;

    for (i = 0; i < 9; i++) {

        d1 += c.charAt(i)*(10-i);

    }

    if (d1 == 0){

        return args.IsValid = false;

    }

    d1 = 11 - (d1 % 11);

    if (d1 > 9) d1 = 0;

    if (dv.charAt(0) != d1) {

        return args.IsValid = false;

    }

    d1 *= 2;

    for (i = 0; i < 9; i++) {

        d1 += c.charAt(i)*(11-i);

    }

    d1 = 11 - (d1 % 11);

    if (d1 > 9) d1 = 0;

    if (dv.charAt(1) != d1) {

        return args.IsValid = false;

    }

    return args.IsValid = true;

}
