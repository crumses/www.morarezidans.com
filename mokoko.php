<!DOCTYPE html>
<html lang="tr">
<?php include 'header.php'; ?>
<style>
.alt-harf {
    margin-bottom: 4px;
    text-align: center;
    width: 100%;
    font-size: 20px;
    color: transparent; /* Görünmez */
    background-color: #fafafa; /* Sayfa arka planı ile aynı */
}

.kare, .cerceve {
    width: 75px;
    height: 75px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    font-size: 18px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
}

.kare {
    background-color: #31a9a9; /* Sativa aqua */
    color: #fff;
}

.cerceve {
    background-color: transparent;
    color: #F25E86; /* Sativa red */
    border: 2px solid #F25E86;
    font-weight: bold;
}

.daire-no {
    font-size: 24px;
}

.fiyat-ic {
    font-size: 16px;
    margin-top: 2px;
    font-weight: bold;
    color: #c29336; /* Sativa gold */
}

.boskare {
    width: 75px;
    height: 75px;
    background-color: #f0f0f0; /* Hafif gri zemin */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
    color: #444;
}

.asansor {
    width: 25px;
    height: 75px;
    background-color: #fafafa; /* Görünmez olması için sayfa rengi */
    color: transparent;
    border: none;
}

.mahmudiye {
    margin-top: 50px;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    border: 8px solid #c29336; /* Gold border */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.kat-bar {
    display: flex;
    justify-content: center;
    background-color: #31a9a9;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.08);
}

.kat-bar button {
    background-color: #2fa2a2;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    margin: 0 5px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.kat-bar button:hover {
    background-color: #00706C;
    transform: translateY(-2px);
}

.kat-bar button:active {
    transform: translateY(0);
}

.kareler-container {
    flex-direction: column;
    align-items: flex-start;
    margin-left: 20px;
}

.kare-satir {
    display: flex;
}

.yatay-kare, .dikeykare {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
}

.yatay-kare {
    width: 100px;
    height: 75px;
    background-color: #c29336;
    color: #fff;
}

.dikeykare {
    width: 75px;
    height: 100px;
    border: 2px solid #F25E86;
    color: #F25E86;
    background-color: transparent;
    font-weight: bold;
    flex-direction: column;
    font-size: 18px;
    text-align: center;
    padding: 4px;
}

.kare:hover, .yatay-kare:hover, .dikeykare:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

.solbosluk {
    margin-left: 110px;
}

.solboslukaz {
    margin-left: 20px;
}

.yukaridan {
    position: relative;
    top: 25px;
}

.yukaridan1 {
    position: relative;
    top: 50px;
}

.asagidan {
    position: relative;
    bottom: 50px;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #ffffff;
    margin: 15% auto;
    padding: 20px;
    border: none;
    width: 50%;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    color: #333;
}

.close {
    color: #31a9a9;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease;
}

.close:hover,
.close:focus {
    color: #00706C;
    text-decoration: none;
    cursor: pointer;
}

</style>

</head>
<body>
    <div class="mahmudiye">
    <div class="kat-bar">
        <button onclick="goToFloor(1)">1. Kat</button>
        <button onclick="goToFloor(2)">2. Kat</button>
        <button onclick="goToFloor(3)">3. Kat</button>
        <button onclick="goToFloor(4)">4. Kat</button>
        <button onclick="goToFloor(5)">5. Kat</button>
    </div>
    <div id="kat-1" class="kareler-container">
    <div class="kare-satir">

    <div class="kare" onclick="openModal('modal2')">
                <div class="daire-no">1</div>
                <div class="fiyat-ic">1+1</div>
            </div>

        <div class="asansor"></div>
        <div class="cerceve">Asansör</div>
        <div class="cerceve">Asansör</div>
        
        <div class="kare" onclick="openModal('modal2')">
                <div class="daire-no">1</div>
                <div class="fiyat-ic">1+1</div>
            </div>
        <div class="cerceve">Yangın Merdiveni</div>
        <div class="kare" onclick="openModal('modal2')">
                <div class="daire-no">1</div>
                <div class="fiyat-ic">1+1</div>
            </div>
            <div class="kare" onclick="openModal('modal2')">
                <div class="daire-no">1</div>
                <div class="fiyat-ic">1+1</div>
            </div>
            <div class="kare" onclick="openModal('modal2')">
                <div class="daire-no">1</div>
                <div class="fiyat-ic">1+1</div>
            </div>
            <div class="kare" onclick="openModal('modal2')">
                <div class="daire-no">1</div>
                <div class="fiyat-ic">1+1</div>
            </div>
        <div class="asansor"></div>
        <div class="kare" onclick="openModal('modal2')">
                <div class="daire-no">1</div>
                <div class="fiyat-ic">1+1</div>
            </div>
        
    </div>
    

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">10</div>
        
        <div class="asansor"></div>
        <div class="kare yukaridan " onclick="openModal('modal6')">11</div>
        <div class="kare yukaridan" onclick="openModal('modal2')">12</div>
        <div class="kare yukaridan" onclick="openModal('modal4')">13</div>
        <div class="kare yukaridan" onclick="openModal('modal5')">14</div>
        <div class="kare yukaridan" onclick="openModal('modal2')">15</div>
        <div class="kare yukaridan" onclick="openModal('modal6')">16</div>
        <div class="kare yukaridan" onclick="openModal('modal6')">17</div>
        <div class="kare yukaridan" onclick="openModal('modal6')">18</div>
        <div class="asansor"></div>
        <div class="kare  yukaridan" onclick="openModal('modal6')">19</div>
        
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal4')">20</div>
        <div class="asansor"></div>
        <div class="asansor  yukaridan" onclick="openModal('modal6')"></div>
        <div class="boskare  yukaridan" onclick="openModal('modal6')"><div class="alt-harf">İ</div></div>
        <div class="boskare  yukaridan" onclick="openModal('modal6')"><div class="alt-harf">Ç</div></div>
        <div class="boskare  yukaridan" onclick="openModal('modal6')"><div class="alt-harf"></div></div>
        <div class="boskare  yukaridan" onclick="openModal('modal6')"><div class="alt-harf">B</div></div>
        <div class="boskare  yukaridan" onclick="openModal('modal6')"><div class="alt-harf">A</div></div>
        <div class="boskare  yukaridan" onclick="openModal('modal6')"><div class="alt-harf">H</div></div>
        <div class="boskare  yukaridan" onclick="openModal('modal6')"><div class="alt-harf">Ç</div></div>
        <div class="boskare  yukaridan" onclick="openModal('modal6')"><div class="alt-harf">E</div></div>
        
        <div class="dikeykare  yukaridan" onclick="openModal('modal6')">Toplantı <br> Odası</div>
        
        
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal5')">21</div>
        <div class="asansor"></div>
        <div class="kare  yukaridan1" onclick="openModal('modal3')">22</div>
        <div class="kare yukaridan1" onclick="openModal('modal2')">23</div>
        <div class="kare yukaridan1" onclick="openModal('modal4')">24</div>
        <div class="kare yukaridan1" onclick="openModal('modal1')">25</div>
        <div class="kare yukaridan1" onclick="openModal('modal4')">26</div>
        <div class="cerceve yukaridan1">Yangın Merdiveni</div>
        <div class="kare   yukaridan1" onclick="openModal('modal5')">27</div>
        <div class="kare  yukaridan1" onclick="openModal('modal2')">28</div>
        <div class="asansor yukaridan1"></div>
        <div class="kare yukaridan1" onclick="openModal('modal6')">29</div>
        
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">31</div>
        <div class="asansor"></div>
    </div>

    <div class="kare-satir">
        
        <div class="kare" onclick="openModal('modal2')">32</div>
        <div class="asansor"></div>
        <div class="kare" onclick="openModal('modal1')">33</div>
        <div class="kare" onclick="openModal('modal3')">34</div>
        <div class="kare" onclick="openModal('modal4')">35</div>
        <div class="kare" onclick="openModal('modal5')">36</div>
        <div class="kare" onclick="openModal('modal6')">37</div>
        <div class="kare" onclick="openModal('modal1')">38</div>
        <div class="kare" onclick="openModal('modal3')">39</div>
        <div class="kare" onclick="openModal('modal4')">40</div>
       
        <div class="kare" onclick="openModal('modal6')">41</div>
    </div>
</div>

<div id="kat-2" class="kareler-container">
    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal2')">42</div>
        <div class="boskare " onclick="openModal('modal5')"></div>
        <div class="kare" onclick="openModal('modal6')">43</div>
        <div class="kare" onclick="openModal('modal1')">44</div>
        <div class="kare" onclick="openModal('modal2')">45</div>
        <div class="kare" onclick="openModal('modal3')">46</div>
        <div class="kare" onclick="openModal('modal3')">47</div>
        <div class="kare" onclick="openModal('modal4')">48</div>
        <div class="kare" onclick="openModal('modal1')">49</div>
        <div class="kare" onclick="openModal('modal1')">50</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">51</div>
        <div class="kare  " onclick="openModal('modal6')">52</div>
        <div class="kare " onclick="openModal('modal2')">53</div>
        <div class="kare " onclick="openModal('modal4')">54</div>
        <div class="kare " onclick="openModal('modal5')">55</div>
        <div class="kare " onclick="openModal('modal2')">56</div>
        <div class="kare " onclick="openModal('modal6')">57</div>
        <div class="kare " onclick="openModal('modal6')">58</div>
        <div class="kare " onclick="openModal('modal6')">59</div>
        <div class="kare  " onclick="openModal('modal6')">60</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal4')">61</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal5')">62</div>
        <div class="kare  " onclick="openModal('modal3')">63</div>
        <div class="kare " onclick="openModal('modal2')">64</div>
        <div class="kare " onclick="openModal('modal4')">65</div>
        <div class="kare " onclick="openModal('modal1')">66</div>
        <div class="kare " onclick="openModal('modal4')">67</div>
        <div class="kare  " onclick="openModal('modal5')">68</div>
        <div class="kare " onclick="openModal('modal2')">69</div>
        <div class="kare " onclick="openModal('modal6')">70</div>
        <div class="kare  " onclick="openModal('modal1')">71</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">72</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal2')">73</div>
        <div class="kare" onclick="openModal('modal1')">74</div>
        <div class="kare" onclick="openModal('modal3')">75</div>
        <div class="kare" onclick="openModal('modal4')">76</div>
        <div class="kare" onclick="openModal('modal5')">77</div>
        <div class="kare" onclick="openModal('modal6')">78</div>
        <div class="kare" onclick="openModal('modal1')">79</div>
        <div class="kare" onclick="openModal('modal3')">80</div>
        <div class="kare" onclick="openModal('modal4')">81</div>
        <div class="kare" onclick="openModal('modal6')">82</div>
    </div>
</div>

<div id="kat-3" class="kareler-container">
    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal2')">83</div>
        <div class="boskare " onclick="openModal('modal5')"></div>
        <div class="kare" onclick="openModal('modal6')">84</div>
        <div class="kare" onclick="openModal('modal1')">85</div>
        <div class="kare" onclick="openModal('modal2')">86</div>
        <div class="kare" onclick="openModal('modal3')">87</div>
        <div class="kare" onclick="openModal('modal3')">88</div>
        <div class="kare" onclick="openModal('modal4')">89</div>
        <div class="kare" onclick="openModal('modal1')">90</div>
        <div class="kare " onclick="openModal('modal1')">91</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">92</div>
        <div class="kare  " onclick="openModal('modal6')">93</div>
        <div class="kare " onclick="openModal('modal2')">94</div>
        <div class="kare " onclick="openModal('modal4')">95</div>
        <div class="kare " onclick="openModal('modal5')">96</div>
        <div class="kare " onclick="openModal('modal2')">97</div>
        <div class="kare " onclick="openModal('modal6')">98</div>
        <div class="kare " onclick="openModal('modal6')">99</div>
        <div class="kare " onclick="openModal('modal6')">100</div>
        <div class="kare  " onclick="openModal('modal6')">101</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal4')">102</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal5')">103</div>
        <div class="kare  " onclick="openModal('modal3')">104</div>
        <div class="kare " onclick="openModal('modal2')">105</div>
        <div class="kare " onclick="openModal('modal4')">106</div>
        <div class="kare " onclick="openModal('modal1')">107</div>
        <div class="kare " onclick="openModal('modal4')">108</div>
        <div class="kare  " onclick="openModal('modal5')">109</div>
        <div class="kare " onclick="openModal('modal2')">110</div>
        <div class="kare " onclick="openModal('modal6')">111</div>
        <div class="kare  " onclick="openModal('modal1')">112</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">113</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal2')">114</div>
        <div class="kare" onclick="openModal('modal1')">115</div>
        <div class="kare" onclick="openModal('modal3')">116</div>
        <div class="kare" onclick="openModal('modal4')">117</div>
        <div class="kare" onclick="openModal('modal5')">118</div>
        <div class="kare" onclick="openModal('modal6')">119</div>
        <div class="kare" onclick="openModal('modal1')">120</div>
        <div class="kare" onclick="openModal('modal3')">121</div>
        <div class="kare" onclick="openModal('modal4')">122</div>
        <div class="kare" onclick="openModal('modal6')" >123</div>
    </div>
</div>

<div id="kat-4" class="kareler-container">
    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal2')">123</div>
        <div class="boskare " onclick="openModal('modal5')"></div>
        <div class="kare" onclick="openModal('modal6')">124</div>
        <div class="kare" onclick="openModal('modal1')">125</div>
        <div class="kare" onclick="openModal('modal2')">126</div>
        <div class="kare" onclick="openModal('modal3')">127</div>
        <div class="kare" onclick="openModal('modal3')">128</div>
        <div class="kare" onclick="openModal('modal4')">129</div>
        <div class="kare" onclick="openModal('modal1')">130</div>
        <div class="kare " onclick="openModal('modal1')">131</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">132</div>
        <div class="kare  " onclick="openModal('modal6')">133</div>
        <div class="kare " onclick="openModal('modal2')">134</div>
        <div class="kare " onclick="openModal('modal4')">135</div>
        <div class="kare " onclick="openModal('modal5')">136</div>
        <div class="kare " onclick="openModal('modal2')">137</div>
        <div class="kare " onclick="openModal('modal6')">138</div>
        <div class="kare " onclick="openModal('modal6')">139</div>
        <div class="kare " onclick="openModal('modal6')">140</div>
        <div class="kare  " onclick="openModal('modal6')">141</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal4')">142</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal5')">143</div>
        <div class="kare  " onclick="openModal('modal3')">144</div>
        <div class="kare " onclick="openModal('modal2')">145</div>
        <div class="kare " onclick="openModal('modal4')">146</div>
        <div class="kare " onclick="openModal('modal1')">147</div>
        <div class="kare " onclick="openModal('modal4')">148</div>
        <div class="kare  " onclick="openModal('modal5')">149</div>
        <div class="kare " onclick="openModal('modal2')">150</div>
        <div class="kare " onclick="openModal('modal6')">151</div>
        <div class="kare  " onclick="openModal('modal1')">152</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">153</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal2')">154</div>
        <div class="kare" onclick="openModal('modal1')">155</div>
        <div class="kare" onclick="openModal('modal3')">156</div>
        <div class="kare" onclick="openModal('modal4')">157</div>
        <div class="kare" onclick="openModal('modal5')">158</div>
        <div class="kare" onclick="openModal('modal6')">159</div>
        <div class="kare" onclick="openModal('modal1')">160</div>
        <div class="kare" onclick="openModal('modal3')">161</div>
        <div class="kare" onclick="openModal('modal4')">162</div>
        <div class="kare" onclick="openModal('modal6')">163</div>
    </div>
</div>

<div id="kat-5" class="kareler-container">
    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal2')">163</div>
        <div class="boskare " onclick="openModal('modal5')"></div>
        <div class="kare" onclick="openModal('modal6')">164</div>
        <div class="kare" onclick="openModal('modal1')">165</div>
        <div class="kare" onclick="openModal('modal2')">166</div>
        <div class="kare" onclick="openModal('modal3')">167</div>
        <div class="kare" onclick="openModal('modal3')">168</div>
        <div class="kare" onclick="openModal('modal4')">169</div>
        <div class="kare" onclick="openModal('modal1')">170</div>
        <div class="kare " onclick="openModal('modal1')">171</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">172</div>
        <div class="kare  " onclick="openModal('modal6')">173</div>
        <div class="kare " onclick="openModal('modal2')">174</div>
        <div class="kare " onclick="openModal('modal4')">175</div>
        <div class="kare " onclick="openModal('modal5')">176</div>
        <div class="kare " onclick="openModal('modal2')">177</div>
        <div class="kare " onclick="openModal('modal6')">178</div>
        <div class="kare " onclick="openModal('modal6')">179</div>
        <div class="kare " onclick="openModal('modal6')">180</div>
        <div class="kare  " onclick="openModal('modal6')">181</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal4')">182</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal5')">183</div>
        <div class="kare  " onclick="openModal('modal3')">184</div>
        <div class="kare " onclick="openModal('modal2')">185</div>
        <div class="kare " onclick="openModal('modal4')">186</div>
        <div class="kare " onclick="openModal('modal1')">187</div>
        <div class="kare " onclick="openModal('modal4')">188</div>
        <div class="kare  " onclick="openModal('modal5')">189</div>
        <div class="kare " onclick="openModal('modal2')">190</div>
        <div class="kare " onclick="openModal('modal6')">191</div>
        <div class="kare  " onclick="openModal('modal1')">192</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">193</div>
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal2')">194</div>
        <div class="kare" onclick="openModal('modal1')">195</div>
        <div class="kare" onclick="openModal('modal3')">196</div>
        <div class="kare" onclick="openModal('modal4')">197</div>
        <div class="kare" onclick="openModal('modal5')">198</div>
        <div class="kare" onclick="openModal('modal6')">199</div>
        <div class="kare" onclick="openModal('modal1')">200</div>
        <div class="kare" onclick="openModal('modal3')">201</div>
        <div class="kare" onclick="openModal('modal4')">202</div>
        <div class="kare" onclick="openModal('modal6')">203</div>
    </div>
</div>


    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <h2>1+0 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 1')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h2>1+1 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 3')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h2>2+1 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 4')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal4')">&times;</span>
            <h2>3+0 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 5')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal5" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal5')">&times;</span>
            <h2>3+1 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 6')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal6')">&times;</span>
            <h2>4+1 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 7')">Rezervasyon Yap</button>
        </div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        window.onclick = function(event) {
            var modals = document.querySelectorAll('.modal');
            modals.forEach(function(modal) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });
        }

        function rezervasyonYap(daire) {
            alert(daire + " için rezervasyon başarıyla alındı!");
            closeModal('modal' + daire.split(' ')[1]);
        }

        function goToFloor(katNumarasi) {
            // Tüm katları gizle
            let katlar = document.querySelectorAll('.kareler-container');
            katlar.forEach(kat => kat.style.display = 'none');

            // Seçilen katı göster
            document.getElementById(`kat-${katNumarasi}`).style.display = 'block';
        }

        // Sayfa yüklendiğinde 1. katı göster
        document.addEventListener('DOMContentLoaded', function() {
            goToFloor(1);
        });
        
    </script>
    <script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBGb3xrNtz335X4G2KfoOXb-XuIyHAzlVo"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/jquery.parallax.min.js"></script>
        <script src="js/template-config.js"></script>
</body>
</html>