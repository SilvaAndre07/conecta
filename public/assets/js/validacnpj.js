function valida_CNPJ(oSrc, args){

    s = args.Value;

    if (isNaN(s)) {

        return args.IsValid = false;

    }

    var i;

    var c = s.substr(0,12);

    var dv = s.substr(12,2);

    var d1 = 0;

    for (i = 0; i <12; i++){

        d1 += c.charAt(11-i)*(2+(i % 8));

    }

    if (d1 == 0)

        return args.IsValid = false;

    d1 = 11 - (d1 % 11);

    if (d1 > 9) d1 = 0;

    if (dv.charAt(0) != d1){

        return args.IsValid = false;

    }

    d1 *= 2;

    for (i = 0; i < 12; i++){

        d1 += c.charAt(11-i)*(2+((i+1) % 8));

    }

    d1 = 11 - (d1 % 11);

    if (d1 > 9)

        d1 = 0;

    if (dv.charAt(1) != d1){

        return args.IsValid = false;

    }

    return args.IsValid = true;

}
