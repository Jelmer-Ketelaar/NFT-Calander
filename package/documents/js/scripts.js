const inputName = document.getElementById('projectNameInput');
const inputShortDes = document.getElementById('projectShortDesInput');
const blockchainLogo = document.getElementById('selectBlockchain');
const twitterNameInput = document.getElementById('twitterNameInput');
const discordNameInput = document.getElementById('discordNameInput');
const websiteLinkInput = document.getElementById('websiteLinkInput');

const log = document.getElementById('projectName');
const log2 = document.getElementById('projectShortDes');
const log3 = document.getElementById('blockchainLogo');
const log4 = document.getElementById('projectImage');
const log5 = document.getElementById('twitterName');
const log6 = document.getElementById('discordName');
const log7 = document.getElementById('websiteName');

inputName.addEventListener('input', updateValue);
inputShortDes.addEventListener('input', updateValue2);
blockchainLogo.addEventListener('input', updateValue3);
twitterNameInput.addEventListener('input', updateValue4);
discordNameInput.addEventListener('input', updateValue5);
websiteLinkInput.addEventListener('input', updateValue6);

function updateValue(e) {
    log.textContent = e.target.value;
}

function updateValue2(e) {
    log2.textContent = e.target.value.substring(0, 60).concat('...');
}

function updateValue3(e) {

    const newBlockchainSelect = blockchainLogo.value;

    if(newBlockchainSelect === 'solana'){
        document.getElementById('promotePrice').textContent = ' 2.62SOL';
        document.getElementById('normalPromoPrice').textContent = ' 2.36SOL';
        document.getElementById('listingPrice').textContent = ' 0.09SOL';
    } else {
        document.getElementById('promotePrice').textContent = ' 0.1ETH';
        document.getElementById('normalPromoPrice').textContent = ' 0.09ETH';
        document.getElementById('listingPrice').textContent = ' 0.004ETH';
    }

    log3.src = 'images/extern_logo/crypto/'+newBlockchainSelect+'.png';

    if(newBlockchainSelect === 'ethereum'){
        document.getElementById('volumeTxt').placeholder = 'Volume traded (ETH)';
    }
    if(newBlockchainSelect === 'solana'){
        document.getElementById('volumeTxt').placeholder = 'Volume traded (SOL)';
    }
    if(newBlockchainSelect === 'polygon'){
        document.getElementById('volumeTxt').placeholder = 'Volume traded (MATIC)';
    }
    if(newBlockchainSelect === 'cardano'){
        document.getElementById('volumeTxt').placeholder = 'Volume traded (ADA)';
    }

}

const loadFile = function (event) {
    log4.src = URL.createObjectURL(event.target.files[0]);
    document.getElementById('bannerLabel').innerHTML = inputName.value + ' image uploaded';
    log4.onload = function () {
        URL.revokeObjectURL(log4.src) // free memory
    }
};

function updateValue4(e) {
    document.getElementById('socialBtn').style.display = 'block';
    document.getElementById('twitterLogo').style.visibility = 'visible';
    if(e.target.value === ''){
        document.getElementById('twitterLogo').style.visibility = 'hidden';
    }
    if(e.target.value === '' && log6 === ''){
        document.getElementById('socialBtn').style.display = 'none';
    }
    log5.textContent = e.target.value;
}

function updateValue5(e) {
    document.getElementById('socialBtn').style.display = 'block';
    document.getElementById('discordLogo').style.visibility = 'visible';
    if(e.target.value === ''){
        document.getElementById('discordLogo').style.visibility = 'hidden';
        log6.textContent = '';
    } else {
        log6.textContent = log.textContent;
    }
    if(e.target.value === '' && log5 === ''){
        document.getElementById('socialBtn').style.display = 'none';
    }
}

function updateValue6(e) {
    document.getElementById('socialBtn').style.display = 'block';
    document.getElementById('websiteLogo').style.visibility = 'visible';
    if(e.target.value === ''){
        document.getElementById('websiteLogo').style.visibility = 'hidden';
        log7.textContent = '';
    }
    if(e.target.value === '' && log5 === '' && log6){
        document.getElementById('socialBtn').style.display = 'none';
    }

    log7.textContent = e.target.value;

    if (log7.textContent.indexOf('https://') > -1)
    {
        log7.textContent = e.target.value.replace("https://", "");
    }
    if (log7.textContent.indexOf('https://') > -1)
    {
        log7.textContent = e.target.value.replace("https://", "");
    }


}



"use strict";


// Unpkg imports
const Web3Modal = window.Web3Modal.default;
const WalletConnectProvider = window.WalletConnectProvider.default;
const EvmChains = window.EvmChains;
const Fortmatic = window.Fortmatic;

// Web3modal instance
let web3Modal

// Chosen wallet provider given by the dialog window
let provider;


// Address of the selected account
let selectedAccount;


function init() {

    console.log("Initializing example");
    console.log("WalletConnectProvider is", WalletConnectProvider);
    console.log("Fortmatic is", Fortmatic);

    // Tell Web3modal what providers we have available.
    // Built-in web browser provider (only one can exist as a time)
    // like MetaMask, Brave or Opera is added automatically by Web3modal
    const providerOptions = {
        walletconnect: {
            package: WalletConnectProvider,
            options: {
                // Mikko's test key - don't copy as your mileage may vary
                infuraId: "ea8d20e6fb9b42cb0bbfaebe0e5982e9",
            }
        },

        fortmatic: {
            package: Fortmatic,
            options: {
                // Mikko's TESTNET api key
                key: "pk_test_391E26A3B43A3350"
            }
        }
    };

    web3Modal = new Web3Modal({
        cacheProvider: false, // optional
        providerOptions, // required
        theme: 'dark',
    });

}


async function fetchAccountData() {

    // Get a Web3 instance for the wallet
    const web3 = new Web3(provider);

    console.log("Web3 instance is", web3);

    // Get connected chain id from Ethereum node
    const chainId = await web3.eth.getChainId();
    // Load chain information over an HTTP API
    const chainData = await EvmChains.getChain(chainId);
    document.querySelector("#network-name").textContent = chainData.name;

    // Get list of accounts of the connected wallet
    const accounts = await web3.eth.getAccounts();

    // MetaMask does not give you all accounts, only the selected account
    console.log("Got accounts", accounts);
    selectedAccount = accounts[0];

    document.querySelector("#selected-account").textContent = selectedAccount;

    // Get a handl
    const template = document.querySelector("#template-balance");
    const accountContainer = document.querySelector("#accounts");

    // Purge UI elements any previously loaded accounts
    accountContainer.innerHTML = '';

    // Go through all accounts and get their ETH balance
    const rowResolvers = accounts.map(async (address) => {
        const balance = await web3.eth.getBalance(address);
        // ethBalance is a BigNumber instance
        // https://github.com/indutny/bn.js/
        const ethBalance = web3.utils.fromWei(balance, "ether");
        const humanFriendlyBalance = parseFloat(ethBalance).toFixed(4);
        // Fill in the templated row and put in the document
        const clone = template.content.cloneNode(true);
        clone.querySelector(".address").textContent = address;
        clone.querySelector(".balance").textContent = humanFriendlyBalance;
        accountContainer.appendChild(clone);
    });

    // Because rendering account does its own RPC commucation
    // with Ethereum node, we do not want to display any results
    // until data for all accounts is loaded
    await Promise.all(rowResolvers);

    // Display fully loaded UI for wallet data
    document.querySelector("#prepare").style.display = "none";
    document.querySelector("#connected").style.display = "block";
}


async function refreshAccountData() {

    // If any current data is displayed when
    // the user is switching acounts in the wallet
    // immediate hide this data
    document.querySelector("#connected").style.display = "none";
    document.querySelector("#prepare").style.display = "block";

    // Disable button while UI is loading.
    // fetchAccountData() will take a while as it communicates
    // with Ethereum node via JSON-RPC and loads chain data
    // over an API call.
    document.querySelector("#btn-connect").setAttribute("disabled", "disabled")
    await fetchAccountData(provider);
    document.querySelector("#btn-connect").removeAttribute("disabled")
}


async function onConnect() {

    console.log("Opening a dialog", web3Modal);
    try {
        provider = await web3Modal.connect();
    } catch (e) {
        console.log("Could not get a wallet connection", e);
        return;
    }

    // Subscribe to accounts change
    provider.on("accountsChanged", (accounts) => {
        fetchAccountData();
    });

    // Subscribe to chainId change
    provider.on("chainChanged", (chainId) => {
        fetchAccountData();
    });

    // Subscribe to networkId change
    provider.on("networkChanged", (networkId) => {
        fetchAccountData();
    });

    await refreshAccountData();
}


async function onDisconnect() {

    console.log("Killing the wallet connection", provider);

    // TODO: Which providers have close method?
    if (provider.close) {
        await provider.close();

        // If the cached provider is not cleared,
        // WalletConnect will default to the existing session
        // and does not allow to re-scan the QR code with a new wallet.
        // Depending on your use case you may want or want not his behavir.
        await web3Modal.clearCachedProvider();
        provider = null;
    }

    selectedAccount = null;

    // Set the UI back to the initial state
    document.querySelector("#prepare").style.display = "block";
    document.querySelector("#connected").style.display = "none";
}


window.addEventListener('load', async () => {
    init();
    document.querySelector("#btn-connect").addEventListener("click", onConnect);
    document.querySelector("#btn-disconnect").addEventListener("click", onDisconnect);
});


jQuery(window).on("load", function () {
    $('#preloader').fadeOut(500);
    $('#main-wrapper').addClass('show');
});


jQuery(document).ready(function () {

    $(function () {
        for (var nk = window.location,
                 o = $(".menu a, .settings-menu a").filter(function () {
                     return this.href === nk;
                 })
                     .addClass("active")
                     .parent()
                     .addClass("active"); ;) {
            // console.log(o)
            if (!o.is("li")) break;
            o = o.parent()
                .addClass("show")
                .parent()
                .addClass("active");
        }

    });


});



(function () {
    let onpageLoad = localStorage.getItem("theme") || "";
    let element = document.body;
    element.classList.add(onpageLoad);
    document.getElementById("theme").textContent =
        localStorage.getItem("theme") || "light";
})();

function themeToggle() {
    let element = document.body;
    element.classList.toggle("dark-theme");

    let theme = localStorage.getItem("theme");
    if (theme && theme === "dark-theme") {
        localStorage.setItem("theme", "");
    } else {
        localStorage.setItem("theme", "dark-theme");
    }
}







