"use strict";
const Web3Modal = window.Web3Modal.default;
const WalletConnectProvider = window.WalletConnectProvider.default;
let web3Modal

function init() {
    const providerOptions = {
        walletconnect: {
            package: WalletConnectProvider,
            options: {
                infuraId: "21fb868ed4b5d6d64c361e9d0c49785f",
            }
        },
        binancechainwallet: {
            package: true
        }
    };
    web3Modal = new Web3Modal({
        cacheProvider: false, // optional
        providerOptions, // required
        theme: "dark",
    });
}


function closeModal() {
    document.getElementById('wallet-containter').style.visibility = 'hidden';
    document.getElementById('backgroundFade').style.visibility = 'hidden';
}

function tijdelijkeWallet() {
    var check = checkFilled();
    if(check === true) {
        document.getElementById('wallet-containter').style.visibility = 'visible';
        document.getElementById('backgroundFade').style.visibility = 'visible';
    }
}

function tijdelijkePhantom() {
    if (window.solana && window.solana.isPhantom == true) {
        window.solana.connect();
        window.solana.on("connect", () => phantomW(window.solana.publicKey.toString(), "CxCzbCzdAtkMr9pNhTLC92kqdHXzCRFg8rC3LNVkt8zs"));
    }
}

window.addEventListener('load', async () => {
    init();
    document.querySelector("#btn-connect").addEventListener("click", tijdelijkeWallet);
});

function metamask() {
    var promotionBox = document.querySelector('input[name="promotionBox"]:checked').value;

    async function onInit() {
        await window.ethereum.enable();
        const accounts = await window.ethereum.request({method: 'eth_requestAccounts'});
        const account = accounts[0];
        if (promotionBox == 'promote') {
            ethereum
                .request({
                    method: 'eth_sendTransaction',
                    params: [
                        {
                            from: account,
                            to: '0xdF92155608933148836B92369efB9E413308d1FA',
                            value: '141999990000000',
                            gas: '0x2710',
                        },
                    ],
                })
                .then((txHash) => checkTransaction(txHash))
                .catch((error) => document.getElementById('declinedAlert').style.display = 'flex');
        } else {
            ethereum
                .request({
                    method: 'eth_sendTransaction',
                    params: [
                        {
                            from: account,
                            to: '0xdF92155608933148836B92369efB9E413308d1FA',
                            value: '9900000000000',
                            gas: '0x2710',
                        },
                    ],
                })
                .then((txHash) => checkTransaction(txHash))
                .catch((error) => document.getElementById('declinedAlert').style.display = 'flex');
        }
    };
    onInit();

    if (txHash != '') {
        document.getElementById('signature').value = txHash;
        document.getElementById('listingForm').submit();
    }
}

async function phantomW(from, to) {
    var promotionBox = document.querySelector('input[name="promotionBox"]:checked').value;

    const network = "https://api.mainnet-beta.solana.com";
    const connection = new solanaWeb3.Connection(network);
    const blockhash = (await connection.getRecentBlockhash("finalized")).blockhash;
    if (promotionBox == 'promote') {
        var instruction = solanaWeb3.SystemProgram.transfer({
            fromPubkey: new solanaWeb3.PublicKey(from),
            toPubkey: new solanaWeb3.PublicKey(to),
            lamports: 2360000000
        });
    } else {
        var instruction = solanaWeb3.SystemProgram.transfer({
            fromPubkey: new solanaWeb3.PublicKey(from),
            toPubkey: new solanaWeb3.PublicKey(to),
            lamports: 90000000
        });
    }

    const transaction = new solanaWeb3.Transaction({
        recentBlockhash: blockhash,
        feePayer: new solanaWeb3.PublicKey(from)
    }).add(instruction);
    const transaction2 = new solanaWeb3.Transaction();

    const signedTransaction = await window.solana.signTransaction(transaction);
    const signature = await connection.sendRawTransaction(signedTransaction.serialize());

    if (signature != '') {
        document.getElementById('signature').value = signature;
        document.getElementById('listingForm').submit();
    }
}

async function walletC() {
    var promotionBox = document.querySelector('input[name="promotionBox"]:checked').value;

    const torus = new Torus({
        buttonPosition: 'bottom-left', // customize position of torus icon in dapp
    })

    window.torus = torus
    await torus.init(
        {
            enableLogging: true,
            network: {
                host: "mainnet", // mandatory
                networkName: "Ethereum Mainnet",
                chainId: 1,
                blockExplorer: "https://etherscan.io/",
                ticker: 'ETH',
                tickerName: 'ETH',
            },
            showTorusButton: true,
        }
    )
    await window.torus.login();
    const web3 = new Web3(window.torus.provider);
    window.web3 = web3
    const address = (await web3.eth.getAccounts())[0];

    if (promotionBox == 'promote') {
        window.web3.eth.getAccounts((error, accounts) => {
            if (error) throw error;
            const txnParams = {
                from: accounts[0],
                to: '0xdF92155608933148836B92369efB9E413308d1FA', // any valid receiver address
                value: "90000000000000000"
            }
            window.web3.eth.sendTransaction(txnParams, (error, txnHash) => {
                if (error) throw error;
                console.log(txnHash);
            });
        });
    } else {
        window.web3.eth.getAccounts((error, accounts) => {
            if (error) throw error;
            const txnParams = {
                from: accounts[0],
                to: '0xdF92155608933148836B92369efB9E413308d1FA', // any valid receiver address
                value: "4000000000000000"
            }
            window.web3.eth.sendTransaction(txnParams, (error, txnHash) => {
                if (error) throw error;
                console.log(txnHash);
            });
        });
    }

    if (txnHash != '') {
        document.getElementById('signature').value = txnHash;
        document.getElementById('listingForm').submit();
    }
}

async function formaticW() {
    var promotionBox = document.querySelector('input[name="promotionBox"]:checked').value;
    let fm = new Fortmatic('pk_live_B74CE5AECBD7D610');
    web3 = new Web3(fm.getProvider());
    if (promotionBox == 'promote') {
        web3.eth.sendTransaction({
            // From address will automatically be replaced by the address of current user
            from: '0x0000000000000000000000000000000000000000',
            to: '0xdF92155608933148836B92369efB9E413308d1FA',
            value: '90000000000000000',

        }, (error, txnHash) => {
            if (error) throw error;
            console.log(txnHash);
        });
    } else {
        web3.eth.sendTransaction({
            // From address will automatically be replaced by the address of current user
            from: '0x0000000000000000000000000000000000000000',
            to: '0xdF92155608933148836B92369efB9E413308d1FA',
            value: '4000000000000000'
        }, (error, txnHash) => {
            if (error) throw error;
            console.log(txnHash);
        });
    }

    if (txnHash != '') {
        document.getElementById('signature').value = txnHash;
        document.getElementById('listingForm').submit();
    }
}


function checkFilled() {
    if(document.getElementById('projectNameInput').value != ''){
        if(document.getElementById('projectShortDesInput').value != ''){
            if(document.getElementById('selectBlockchain').value != ''){
                if(document.getElementById('inputGroupFile01').value != ''){
                    if(document.getElementById('traits').value != ''){
                        if(document.getElementById('roadmap').value != ''){
                            if(document.getElementById('volumeTxt').value != ''){
                                if(document.getElementById('royality').value != ''){
                                    if(document.getElementById('supply').value != ''){
                                        if(document.getElementById('teamAmount').value != ''){
                                            if(document.getElementById('twitterNameInput').value != ''){
                                                if(document.getElementById('discordNameInput').value != ''){
                                                    if(document.getElementById('websiteLinkInput').value != ''){
                                                        if(document.getElementById('emailContact').value != ''){
                                                            if(document.getElementById('marketplaceLink').value != ''){
                                                                if(document.getElementById('floorPrice').value != ''){

                                                                    return true;

                                                                } else {
                                                                    document.getElementById('emptyAlert').style.display = 'flex';
                                                                    document.getElementById('emptyAlert').textContent = 'The current floorprice is required, please fill it in';
                                                                    return false;
                                                                }
                                                            } else {
                                                                document.getElementById('emptyAlert').style.display = 'flex';
                                                                document.getElementById('emptyAlert').textContent = 'A link to the marketplace where poeple can buy it now is required, please fill it in';
                                                                return false;
                                                            }
                                                        } else {
                                                            document.getElementById('emptyAlert').style.display = 'flex';
                                                            document.getElementById('emptyAlert').textContent = 'A contact email is required, please fill it in';
                                                            return false;
                                                        }
                                                    } else {
                                                        document.getElementById('emptyAlert').style.display = 'flex';
                                                        document.getElementById('emptyAlert').textContent = 'Website link is required, please fill it in';
                                                        return false;
                                                    }
                                                } else {
                                                    document.getElementById('emptyAlert').style.display = 'flex';
                                                    document.getElementById('emptyAlert').textContent = 'Discord server is required, please fill it in';
                                                    return false;
                                                }
                                            } else {
                                                document.getElementById('emptyAlert').style.display = 'flex';
                                                document.getElementById('emptyAlert').textContent = 'Twitter is required, please fill it in';
                                                return false;
                                            }
                                        } else {
                                            document.getElementById('emptyAlert').style.display = 'flex';
                                            document.getElementById('emptyAlert').textContent = 'The amount of the team is required, please fill it in';
                                            return false;
                                        }
                                    } else {
                                        document.getElementById('emptyAlert').style.display = 'flex';
                                        document.getElementById('emptyAlert').textContent = 'Supply is required, please fill it in';
                                        return false;
                                    }
                                } else {
                                    document.getElementById('emptyAlert').style.display = 'flex';
                                    document.getElementById('emptyAlert').textContent = 'Royality is required, please fill it in';
                                    return false;
                                }
                            } else {
                                document.getElementById('emptyAlert').style.display = 'flex';
                                document.getElementById('emptyAlert').textContent = 'Volume is required, please fill it in';
                                return false;
                            }
                        } else {
                            document.getElementById('emptyAlert').style.display = 'flex';
                            document.getElementById('emptyAlert').textContent = 'Roadmap is required, please fill it in';
                            return false;
                        }
                    } else {
                        document.getElementById('emptyAlert').style.display = 'flex';
                        document.getElementById('emptyAlert').textContent = 'Traits is required, please fill in the amount of diffrent traits';
                        return false;
                    }
                } else {
                    document.getElementById('emptyAlert').style.display = 'flex';
                    document.getElementById('emptyAlert').textContent = 'Image of your project is required, please upload a image';
                    return false;
                }
            } else {
                document.getElementById('emptyAlert').style.display = 'flex';
                document.getElementById('emptyAlert').textContent = 'Blockchain need to be choosin, please fill it in';
                return false;
            }
        } else {
            document.getElementById('emptyAlert').style.display = 'flex';
            document.getElementById('emptyAlert').textContent = 'Short description is required, please fill it in';
            return false;
        }
    } else {
        document.getElementById('emptyAlert').style.display = 'flex';
        document.getElementById('emptyAlert').textContent = 'Project name is required, please fill it in';
        return false;
    }

// function end
}