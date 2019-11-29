<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="" id="busca-principal">
    <input type="checkbox" name="tipoVeiculo" value="1" class="d-none" checked="">
    <fieldset>
    <h5>Veículo</h5>
    <div class="form-group select-group">
        <select id="marca" name="marca" class="form-control"><option selected="" value="">Selecione a marca</option><option value="4">Audi</option><option value="5">BMW</option><option value="7">Chevrolet</option><option value="9">Citroen</option><option value="18">Fiat</option><option value="19">Ford</option><option value="23">Hyundai</option><option value="22">Honda</option><option value="27">Jeep</option><option value="36">Mercedes Benz</option><option value="38">Mitsubishi</option><option value="42">Nissan</option><option value="45">Peugeot</option><option value="49">Renault</option><option value="55">Toyota</option><option value="57">Volkswagen</option><option value="60"> -</option><option value="1">Agrale</option><option value="2">Alfa Romeo</option><option value="184">Americar</option><option value="3">Asia Motors</option><option value="175">Aston Martin</option><option value="4">Audi</option><option value="139">Autocross</option><option value="5">BMW</option><option value="6">Buggy</option><option value="156">Cadillac</option><option value="150">Chana</option><option value="120">Changan</option><option value="119">Chery</option><option value="7">Chevrolet</option><option value="8">Chrysler</option><option value="9">Citroen</option><option value="10">Comil</option><option value="11">Daewoo</option><option value="12">Daihatsu</option><option value="13">DKW</option><option value="14">Dodge</option><option value="15">Effa</option><option value="132">Emis</option><option value="16">Engesa</option><option value="147">Farus</option><option value="17">Ferrari</option><option value="18">Fiat</option><option value="19">Ford</option><option value="180">Geely</option><option value="176">GMC</option><option value="178">Gonow</option><option value="20">Gurgel</option><option value="21">Hafei</option><option value="22">Honda</option><option value="155">Hummer</option><option value="23">Hyundai</option><option value="170">Infiniti</option><option value="24">Isuzu</option><option value="25">Iveco</option><option value="127">Jac Motors</option><option value="26">Jaguar</option><option value="27">Jeep</option><option value="162">Jinbei</option><option value="28">JPX</option><option value="29">Kia Motors</option><option value="30">Lada</option><option value="160">Lamborghini</option><option value="31">Land Rover</option><option value="144">Lexus</option><option value="130">Lifan Motors</option><option value="149">Lincoln</option><option value="159">Lotus</option><option value="137">Mahindra</option><option value="33">Mascarelo</option><option value="34">Maserati</option><option value="35">Mazda</option><option value="44">Mclaren</option><option value="36">Mercedes Benz</option><option value="168">MG</option><option value="37">Mini</option><option value="145">Mini Veículos</option><option value="38">Mitsubishi</option><option value="39">Miura</option><option value="40">MP Lafer</option><option value="41">NeoBus</option><option value="42">Nissan</option><option value="43">Oldsmobile</option><option value="117">Opel</option><option value="45">Peugeot</option><option value="46">Pontiac</option><option value="47">Porsche</option><option value="165">Pretty</option><option value="48">Puma</option><option value="49">Renault</option><option value="172">Rolls Royce</option><option value="138">Santa Matilde</option><option value="50">Seat</option><option value="161">Shineray</option><option value="123">Smart</option><option value="51">Ssangyong</option><option value="52">Subaru</option><option value="53">Suzuki</option><option value="143">Tac</option><option value="54">Tanger</option><option value="55">Toyota</option><option value="181">Triumph</option><option value="56">Troller</option><option value="57">Volkswagen</option><option value="58">Volvo</option><option value="59">Walk</option><option value="136">Willys</option></select>
    </div>
    <div class="form-group select-group">
        <select name="modelo" class="form-control"><option selected="" value="">Selecione o modelo</option></select> </div>
    </fieldset>
    <fieldset class="mb-3">
    <h5>Ano/Modelo</h5>
    <div class="row">
        <div class="col-6">
            <select name="anoDe" class="form-control"><option value="">De</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
            </select> 
        </div>
        <div class="col-6">
            <select name="anoAte" class="form-control"><option value="">Até</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
            </select>
        </div>
    </div>
    </fieldset>
    <fieldset class="mb-3">
    <h5>Preço</h5>
    <input type="checkbox" name="tipoVeiculo" value="1" class="d-none" checked="">
    <div class="row">
    <div class="col-6">
    <select name="precoDe" class="form-control"><option value="">Min.</option>
    <option value="2000">2.000</option>
    <option value="4000">4.000</option>
    <option value="6000">6.000</option>
    <option value="8000">8.000</option>
    <option value="10000">10.000</option>
    <option value="12000">12.000</option>
    <option value="14000">14.000</option>
    <option value="16000">16.000</option>
    <option value="18000">18.000</option>
    <option value="20000">20.000</option>
    <option value="22000">22.000</option>
    <option value="24000">24.000</option>
    <option value="26000">26.000</option>
    <option value="28000">28.000</option>
    <option value="30000">30.000</option>
    <option value="35000">35.000</option>
    <option value="40000">40.000</option>
    <option value="45000">45.000</option>
    <option value="50000">50.000</option>
    <option value="60000">60.000</option>
    <option value="70000">70.000</option>
    <option value="80000">80.000</option>
    <option value="90000">90.000</option>
    <option value="100000">100.000</option>
    <option value="120000">120.000</option>
    <option value="140000">140.000</option>
    <option value="160000">160.000</option>
    <option value="180000">180.000</option>
    <option value="200000">200.000</option>
    <option value="250000">250.000</option>
    <option value="300000">300.000</option>
    <option value="350000">350.000</option>
    <option value="400000">400.000</option></select> </div>
    <div class="col-6">
    <select name="precoAte" class="form-control"><option value="">Máx.</option>
    <option value="2000">2.000</option>
    <option value="4000">4.000</option>
    <option value="6000">6.000</option>
    <option value="8000">8.000</option>
    <option value="10000">10.000</option>
    <option value="12000">12.000</option>
    <option value="14000">14.000</option>
    <option value="16000">16.000</option>
    <option value="18000">18.000</option>
    <option value="20000">20.000</option>
    <option value="22000">22.000</option>
    <option value="24000">24.000</option>
    <option value="26000">26.000</option>
    <option value="28000">28.000</option>
    <option value="30000">30.000</option>
    <option value="35000">35.000</option>
    <option value="40000">40.000</option>
    <option value="45000">45.000</option>
    <option value="50000">50.000</option>
    <option value="60000">60.000</option>
    <option value="70000">70.000</option>
    <option value="80000">80.000</option>
    <option value="90000">90.000</option>
    <option value="100000">100.000</option>
    <option value="150000">150.000</option>
    <option value="200000">200.000</option>
    <option value="250000">250.000</option>
    <option value="300000">300.000</option>
    <option value="350000">350.000</option>
    <option value="400000">400.000</option>
    <option value="450000">450.000</option>
    <option value="500000">500.000</option>
    <option value="600000">600.000</option>
    <option value="700000">700.000</option>
    <option value="800000">800.000</option>
    <option value="900000">900.000</option>
    <option value="1000000">1.000.000</option>
    <option value="2000000">2.000.000</option></select> </div>
    </div>
    </fieldset>
    <fieldset class="mb-3">
    <h5>Quilometragem</h5>
    <div class="row">
    <div class="col-6">
    <select name="kmDe" class="form-control"><option value="">Min.</option>
    <option value="0">0</option>
    <option value="2000">2.000</option>
    <option value="4000">4.000</option>
    <option value="6000">6.000</option>
    <option value="8000">8.000</option>
    <option value="10000">10.000</option>
    <option value="12000">12.000</option>
    <option value="14000">14.000</option>
    <option value="16000">16.000</option>
    <option value="18000">18.000</option>
    <option value="20000">20.000</option>
    <option value="22000">22.000</option>
    <option value="24000">24.000</option>
    <option value="26000">26.000</option>
    <option value="28000">28.000</option>
    <option value="30000">30.000</option>
    <option value="35000">35.000</option>
    <option value="40000">40.000</option>
    <option value="45000">45.000</option>
    <option value="50000">50.000</option>
    <option value="60000">60.000</option>
    <option value="70000">70.000</option>
    <option value="80000">80.000</option>
    <option value="90000">90.000</option>
    <option value="100000">100.000</option></select> </div>
    <div class="col-6">
    <select name="kmAte" class="form-control"><option value="">Máx.</option>
    <option value="2000">2.000</option>
    <option value="4000">4.000</option>
    <option value="6000">6.000</option>
    <option value="8000">8.000</option>
    <option value="10000">10.000</option>
    <option value="12000">12.000</option>
    <option value="14000">14.000</option>
    <option value="16000">16.000</option>
    <option value="18000">18.000</option>
    <option value="20000">20.000</option>
    <option value="22000">22.000</option>
    <option value="24000">24.000</option>
    <option value="26000">26.000</option>
    <option value="28000">28.000</option>
    <option value="30000">30.000</option>
    <option value="35000">35.000</option>
    <option value="40000">40.000</option>
    <option value="45000">45.000</option>
    <option value="50000">50.000</option>
    <option value="60000">60.000</option>
    <option value="70000">70.000</option>
    <option value="80000">80.000</option>
    <option value="90000">90.000</option>
    <option value="100000">100.000</option>
    <option value="150000">150.000</option>
    <option value="200000">200.000</option>
    <option value="250000">250.000</option>
    <option value="300000">300.000</option>
    <option value="350000">350.000</option>
    <option value="400000">400.000</option>
    <option value="450000">450.000</option>
    <option value="500000">500.000</option>
    <option value="600000">600.000</option>
    <option value="700000">700.000</option>
    <option value="800000">800.000</option>
    <option value="900000">900.000</option>
    <option value="1000000">1.000.000</option>
    <option value="2000000">2.000.000</option></select> </div>
    </div>
    </fieldset>
    <fieldset>
    <h5>Condição/Origem</h5>
    <div class="row">
    <div class="col-6">
    <input type="radio" name="estado" value="novo" class="form-checkbox" id="condicao-novo" data-uncheckable="">
    <label for="condicao-novo">Zero km</label>
    </div>
    <div class="col-6">
    <input type="radio" name="origem" value="revenda" class="form-checkbox" id="origem-revenda" data-uncheckable="">
    <label for="origem-revenda">Revenda</label>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <input type="radio" name="estado" value="usado" class="form-checkbox" id="condicao-usado" data-uncheckable="">
    <label for="condicao-usado">Usado</label>
    </div>
    <div class="col-6">
    <input type="radio" name="origem" value="particular" class="form-checkbox" id="origem-particular" data-uncheckable="">
    <label for="origem-particular">Particular</label>
    </div>
    </div>
    </fieldset>
    <fieldset class="autocomplete-component search-location">
    <h5>Localização</h5>
    <div class="">
    <span class="autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input type="text" class="form-control cidade aa-hint" readonly="" aria-hidden="true" autocomplete="off" spellcheck="false" tabindex="-1" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input type="text" class="form-control cidade aa-input" placeholder="Digite o nome da cidade" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="both" aria-expanded="false" aria-owns="autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Roboto, Arial, sans-serif; font-size: 12.8px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="aa-dropdown-menu" role="listbox" id="autocomplete-listbox-0" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="aa-dataset-1"></div></span></span>
    <div class="cidades-selecionadas">
    <template>
    <div class="cidade-selecionada">
    <div>
    <span class="text"></span>
    <input type="hidden" name="cidade[]" class="idCidade">
    <span class="delete">X</span>
    </div>
    </div>
    </template>
    </div>
    </div>
    </fieldset>
    <fieldset class="">
    <h5>Versão</h5>
    <div class="">
    <input type="text" class="form-control versao" name="versao" pattern=".{2,10}" title="Mínimo de 2 caracteres" placeholder="Digite a Versão que quer buscar">
    </div>
    </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-carro">
    <h5>CÂMBIO</h5> <ul class="checkbox-list">
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-11" value="11">
    <label for="acc-11">AUTOMÁTICO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-60" value="60">
    <label for="acc-60">MANUAL</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-78" value="78">
    <label for="acc-78">AUTOMATIZADO</label>
    </li>
    </ul>
    </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-carro">
    <h5>Motor</h5> <select name="motor" class="form-control"><option value="">Selecione</option><option>0.8</option><option>1.0</option><option>1.1</option><option>1.2</option><option>1.3</option><option>1.4</option><option>1.5</option><option>1.6</option><option>1.7</option><option>1.8</option><option>1.9</option><option>2.0</option><option>2.1</option><option>2.2</option><option>2.3</option><option>2.4</option><option>2.5</option><option>2.6</option><option>2.7</option><option>2.8</option><option>2.9</option><option>3.0</option><option>3.1</option><option>3.2</option><option>3.3</option><option>3.4</option><option>3.5</option><option>3.6</option><option>3.7</option><option>3.8</option><option>3.9</option><option>4.0</option><option>4.1</option><option>4.2</option><option>4.3</option><option>4.4</option><option>4.5</option><option>4.6</option><option>4.7</option><option>4.8</option><option>4.9</option><option>5.0</option><option>5.2</option><option>5.3</option><option>5.4</option><option>5.5</option><option>5.9</option><option>6.1</option><option>6.2</option><option>6.3</option><option>6.7</option></select> </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-carro">
    <h5>Combustível</h5> <select name="combustivel" class="form-control"><option value="">Selecione o combustível</option>
    <option value="1">Álcool</option>
    <option value="2">Bi-Combustível</option>
    <option value="3">Diesel</option>
    <option value="4">Gasolina</option>
    <option value="5">Gasolina + Kit Gás</option>
    <option value="6">Kit Gás</option>
    <option value="7">Tetra Fuel</option></select> </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-carro">
    <h5>Cor</h5> <select name="cor" class="form-control"><option value="">Selecione uma cor</option>
    <option value="amarelo">Amarelo</option>
    <option value="azul">Azul</option>
    <option value="bege">Bege</option>
    <option value="branco">Branco</option>
    <option value="bronze">Bronze</option>
    <option value="cinza">Cinza</option>
    <option value="dourado">Dourado</option>
    <option value="laranja">Laranja</option>
    <option value="marrom">Marrom</option>
    <option value="prata">Prata</option>
    <option value="preto">Preto</option>
    <option value="rosa">Rosa</option>
    <option value="roxo">Roxo</option>
    <option value="verde">Verde</option>
    <option value="vermelho">Vermelho</option>
    <option value="vinho">Vinho</option></select> </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-carro">
    <h5>Portas</h5> <select name="portas" class="form-control"><option value="">Número de portas</option>
    <option value="1">1 Porta</option>
    <option value="2">2 Portas</option>
    <option value="3">3 Portas</option>
    <option value="4">4 Portas</option>
    <option value="5">5 Portas</option>
    <option value="6">6 Portas</option></select> </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-carro">
    <h5>ACESSÓRIOS</h5><h6>DE SEGURANÇA</h6> <ul class="checkbox-list">
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-2" value="2">
    <label for="acc-2">1 AIR BAG</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-3" value="3">
    <label for="acc-3">2 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-67" value="67">
    <label for="acc-67">3 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-52" value="52">
    <label for="acc-52">4 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-68" value="68">
    <label for="acc-68">5 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-69" value="69">
    <label for="acc-69">6 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-70" value="70">
    <label for="acc-70">7 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-71" value="71">
    <label for="acc-71">8 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-72" value="72">
    <label for="acc-72">9 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-73" value="73">
    <label for="acc-73">10 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-74" value="74">
    <label for="acc-74">11 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-75" value="75">
    <label for="acc-75">12 AIR BAGS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-1" value="1">
    <label for="acc-1">ABS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-4" value="4">
    <label for="acc-4">ALARME</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-76" value="76">
    <label for="acc-76">AWD</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-10" value="10">
    <label for="acc-10">BLINDADO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-61" value="61">
    <label for="acc-61">CONTROLE ESTABILIDADE</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-62" value="62">
    <label for="acc-62">CONTROLE TRAÇÃO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-49" value="49">
    <label for="acc-49">FAROL XENÔNIO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-53" value="53">
    <label for="acc-53">SENSOR DE RÉ</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-32" value="32">
    <label for="acc-32">TRAÇÃO 4x4</label>
    </li>
    </ul>
    <div class="show-all">
    <a href="#" title="Ver todos os acessórios desse grupo">
    <span class="show-off-show-all">
    VER TODOS <i class="icon icon-arrow-down"></i>
    </span>
    <span class="show-on-show-all">
    VER POUCOS <i class="icon icon-arrow-up"></i>
    </span>
    </a>
    </div>
    </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-carro">
    <h5>ACESSÓRIOS</h5><h6>DE CONFORTO</h6> <ul class="checkbox-list">
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-77" value="77">
    <label for="acc-77">7 Lugares</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-6" value="6">
    <label for="acc-6">AR CONDICIONADO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-9" value="9">
    <label for="acc-9">BANCOS DE COURO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-59" value="59">
    <label for="acc-59">CÂMERA DE RÉ</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-51" value="51">
    <label for="acc-51">CD / MP3</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-56" value="56">
    <label for="acc-56">CENTRAL MULTIMIDIA</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-14" value="14">
    <label for="acc-14">COMPUTADOR DE BORDO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-66" value="66">
    <label for="acc-66">CONVERSÍVEL</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-15" value="15">
    <label for="acc-15">DESEMBAÇADOR</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-16" value="16">
    <label for="acc-16">DIREÇÃO ELÉTRICA</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-17" value="17">
    <label for="acc-17">DIREÇÃO HIDRÁULICA</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-18" value="18">
    <label for="acc-18">DVD</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-63" value="63">
    <label for="acc-63">GPS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-22" value="22">
    <label for="acc-22">MP3 / USB</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-23" value="23">
    <label for="acc-23">PILOTO AUTOMÁTICO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-27" value="27">
    <label for="acc-27">RETROVISORES ELÉTRICOS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-30" value="30">
    <label for="acc-30">TETO-SOLAR</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-33" value="33">
    <label for="acc-33">TRAVAS ELÉTRICAS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-35" value="35">
    <label for="acc-35">VIDROS ELÉTRICOS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-50" value="50">
    <label for="acc-50">VOLANTE AJUSTÁVEL</label>
    </li>
    </ul>
    <div class="show-all">
    <a href="#" title="Ver todos os acessórios desse grupo">
    <span class="show-off-show-all">
    VER TODOS <i class="icon icon-arrow-down"></i>
    </span>
    <span class="show-on-show-all">
    VER POUCOS <i class="icon icon-arrow-up"></i>
    </span>
    </a>
    </div>
    </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-carro">
    <h5>ACESSÓRIOS</h5><h6>OUTROS ACESSÓRIOS</h6> <ul class="checkbox-list">
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-12" value="12">
    <label for="acc-12">CAPOTA MARÍTIMA</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-19" value="19">
    <label for="acc-19">ENGATE</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-20" value="20">
    <label for="acc-20">FARÓIS DE MILHA</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-21" value="21">
    <label for="acc-21">LIMPADOR TRASEIRO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-24" value="24">
    <label for="acc-24">PROTETOR DE CAÇAMBA</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-57" value="57">
    <label for="acc-57">REBAIXADO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-28" value="28">
     <label for="acc-28">RODAS DE LIGA LEVE</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-58" value="58">
    <label for="acc-58">TURBO</label>
    </li>
    </ul>
    <div class="show-all">
    <a href="#" title="Ver todos os acessórios desse grupo">
    <span class="show-off-show-all">
    VER TODOS <i class="icon icon-arrow-down"></i>
    </span>
    <span class="show-on-show-all">
    VER POUCOS <i class="icon icon-arrow-up"></i>
    </span>
    </a>
    </div>
    </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-moto">
    <h5>ACESSÓRIOS</h5><h6>DE SEGURANÇA</h6> <ul class="checkbox-list">
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-55" value="55">
    <label for="acc-55">ABS</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-37" value="37">
    <label for="acc-37">ALARME</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-43" value="43">
    <label for="acc-43">CONTROLE DE TRAÇÃO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-48" value="48">
    <label for="acc-48">FREIOS À DISCO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-42" value="42">
    <label for="acc-42">INJEÇÃO ELETRONICA</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-47" value="47">
    <label for="acc-47">TRAVAS</label>
    </li>
    </ul>
    <div class="show-all">
    <a href="#" title="Ver todos os acessórios desse grupo">
    <span class="show-off-show-all">
    VER TODOS <i class="icon icon-arrow-down"></i>
    </span>
    <span class="show-on-show-all">
    VER POUCOS <i class="icon icon-arrow-up"></i>
    </span>
    </a>
    </div>
    </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-moto">
    <h5>ACESSÓRIOS</h5><h6>DE CONFORTO</h6> <ul class="checkbox-list">
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-64" value="64">
    <label for="acc-64">AMORTECEDOR DE DIREÇÃO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-39" value="39">
    <label for="acc-39">BAGAGEIRO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-65" value="65">
    <label for="acc-65">COMPUTADOR DE BORDO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-38" value="38">
    <label for="acc-38">DESCANSO CENTRAL</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-44" value="44">
    <label for="acc-44">PARTIDA ELÉTRICA</label>
    </li>
    </ul>
    <div class="show-all">
    <a href="#" title="Ver todos os acessórios desse grupo">
    <span class="show-off-show-all">
    VER TODOS <i class="icon icon-arrow-down"></i>
    </span>
    <span class="show-on-show-all">
    VER POUCOS <i class="icon icon-arrow-up"></i>
    </span>
    </a>
    </div>
    </fieldset>
    <fieldset class="acessorio-group acessorio-hide acessorio-show-on-moto">
    <h5>ACESSÓRIOS</h5><h6>ACESSÓRIOS</h6> <ul class="checkbox-list">
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-40" value="40">
    <label for="acc-40">CARENAGEM</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-41" value="41">
    <label for="acc-41">ESCAPAMENTO ESPORTIVO</label>
    </li>
    <li class="checkbox-group">
    <input class="form-checkbox" type="checkbox" name="listaAcessorios[]" id="acc-46" value="46">
    <label for="acc-46">RODAS</label>
    </li>
    </ul>
    </fieldset>
    <div class="buttons-set">
    <button class="btn btn-primary btn-block" id="button"><span>Aplicar Filtros</span></button>
    </div>
    <div class="buttons-set floating">
    <button class="btn btn-primary btn-block" id="floatingbutton"><span>Aplicar Filtros</span></button>
    </div>
    </form>
</div>

</body>
</html>