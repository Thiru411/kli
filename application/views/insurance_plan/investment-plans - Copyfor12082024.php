<?php
function isMobile()
{
    return preg_match(
        '/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i',
        $_SERVER['HTTP_USER_AGENT']
    );
}
if (isMobile()) {
    $actual_link =
        (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
            ? 'https'
            : 'https') . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $temp = [];
    $temp = explode('/', $actual_link);

    if ($temp[3] == 'main') {
        redirect(base_url());
    }
    // Do something for only mobile users
} else {
    $actual_link =
        (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
            ? 'https'
            : 'https') . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $temp = [];
    $temp = explode('/', $actual_link);

    if ($temp[3] == 'main') {
        redirect(base_url());
    }
    // Do something for only desktop users
}
$categoryGA = $actionGA = $labelGA = $eventGA = '';

?>
<link rel="stylesheet" href="assets/css/investment-plan.css" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<section class="save-breadcrumb">
    <div class="midWrapper">
        <ul class="breadcrumb-ulip">
            <li><a href="https://www.kotaklife.com/">Life Insurance&gt;</a></li>
            <li class="active"><a href="javascript:void(0)">Investment Plans</a></li>
        </ul>
    </div>
</section>
<section class="investmentPlans">
    <div class="midWrapper">
        <div class="investmentGrid">
            <div>
                <h1 class="investmentMainTitle">Investment Plans</h1>
                <p class="investmentDesc">
                    Investment plans provide a structured approach to wealth accumulation and preservation, catering to diverse financial goals and risk profiles. A robust investment plan is vital for achieving financial security and
                    meeting long-term goals. It serves as a strategic roadmap, guiding individuals towards informed decisions about where to allocate resources, how much to invest, and for how long.
                </p>
                <br />
                <p class="investmentDesc">
                    An investment plan serves as a blueprint for making informed decisions about where to invest money, how much to invest, and for how long. It typically begins with setting clear, measurable goals, whether saving for
                    <span id="dots">...</span>
                    <span id="more">
                        retirement, buying a house, funding education, or simply growing wealth over time. It provides structure and direction, empowering individuals to explore the complexities of financial markets with confidence and
                        purpose, ultimately working towards a secure financial future.
                    </span>
                    <span style="color: #ed3237; cursor: pointer; font-weight: 600;" onclick="readMoreHra()" id="myBtn">Read more</span>
                </p>
            </div>
            <div class="investplansprite investimg"></div>
        </div>
    </div>
</section>
<section id="investmentPlans">
    <div class="midWrapper">
        <h2 class="investmentTitle">What is an Investment Plan?</h2>
        <p class="investmentDesc">
            An investment plan is a strategic roadmap designed to help individuals or organizations achieve financial goals by allocating resources to various assets or securities. It involves assessing financial objectives, risk tolerance,
            and time horizon to create a personalized wealth accumulation or preservation strategy.
        </p>
    </div>
</section>
<section class="term-blog mt-30">
    <div class="midWrapper">
        <div class="termblog-sick" id="term-blogs">
            <div><a class="term-blg" href="https://www.kotaklife.com/investment-plans/10-lakh-investment-plan" target="_blank">10 Lakh Investment Plan</a></div>
            <div><a class="term-blg" href="https://www.kotaklife.com/investment-plans/10-year-investment-plan" target="_blank">10 Year Investment Plan</a></div>
            <div><a class="term-blg" href="https://www.kotaklife.com/investment-plans/15-lakh-investment-plan" target="_blank">15 Lakh Investment Plan</a></div>
            <div><a class="term-blg" href="https://www.kotaklife.com/investment-plans/30-lakh-investment-plan" target="_blank">30 Lakh Investment Plan</a></div>
            <div><a class="term-blg" href="https://www.kotaklife.com/investment-plans/5-lakh-investment-plan" target="_blank">5 Lakh Investment Plan</a></div>
            <div><a class="term-blg" href="https://www.kotaklife.com/investment-plans/50-lakh-investment-plan" target="_blank">50 Lakh Investment Plan</a></div>
            <div><a class="term-blg" href="https://www.kotaklife.com/investment-plans/capital-guarantee-solution" target="_blank">Capital Guarantee Solution</a></div>
            <div><a class="term-blg" href="https://www.kotaklife.com/investment-plans/recurring-deposit" target="_blank">Recurring Deposit</a></div>
        </div>
    </div>
</section>
<section id="investmentPlans">
    <div class="midWrapper">
        <h2 class="investmentTitle">Types of Investment Plans in India</h2>
        <p class="investmentDesc">
            An investment plan considers risk management. It evaluates the balance between potential returns and the level of risk one is willing to tolerate. Several investment plans in India cater to different risk profiles and financial
            goals.
        </p>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg11"></div>
            <div>
                <h3 class="investmentSubTitle">Low-risk Investment</h3>
                <p class="investmentDesc">
                    Low-risk investment options provide varying degrees of returns and liquidity, allowing investors to choose based on their risk tolerance and financial objectives. Here are some of the popular low-risk investment options:
                </p>
            </div>
        </div>
        <div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Guaranteed Savings Plan</h4>
                    <p class="investmentDesc">
                        <a href="https://www.kotaklife.com/savings-plan/kotak-guaranteed-savings-plan-online" class="inline-links">Guaranteed Savings Plans</a>are low-risk investment plans offering guaranteed returns and life insurance
                        coverage. Insurance companies typically offer them and are designed to help individuals build savings over a specified period while providing financial protection to their loved ones.
                    </p>
                </div>
            </div>
            <div class="blueBanner-cta">
                <p>Lump sum returns or Monthly income? We have them both!</p>
                <a href="<?=base_url()?>buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=lump-sum-returns-or-monthly-income-we-have-them-both">
                    Check Now
                </a>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Tax Saving Fixed Deposits</h4>
                    <p class="investmentDesc">Fixed deposits with banks or post offices that offer tax benefits under Section 80C of the Income Tax Act, with the principal amount locked in for a specified period.</p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Sukanya Samriddhi Yojana (SSY)</h4>
                    <p class="investmentDesc">
                        Sukanya Samriddhi Yojana, or SSY, is a government-backed savings scheme designed to secure the financial security of the girl child. It offers attractive interest rates and tax benefits to the policyholder.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Public Provident Fund (PPF)</h4>
                    <p class="investmentDesc">
                        This is a long-term savings scheme with tax benefits. It offers a fixed interest rate and partial withdrawal options after a specified period. Currently, this scheme offers an attractive interest rate of 7.1% per
                        annum.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Senior Citizen Savings Scheme (SCSS)</h4>
                    <p class="investmentDesc">The Senior Citizen Savings Scheme is exclusively for senior citizens. It offers regular income and tax benefits, with a fixed interest rate of 8.2% per annum.</p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Retirement Plans</h4>
                    <p class="investmentDesc">
                        Retirement plans are designed to help individuals accumulate savings and generate income during their retirement years. These plans aim to ensure financial security and independence post-retirement when individuals
                        no longer receive regular employment income.
                    </p>
                </div>
            </div>
            <div class="blueBanner-cta">
                <p>Build a retirement corpus for stress-free second innings</p>
                <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=l2category&utm_content=build-a-retirement-corpus-for-stress-free-second-innings">
                    Retire Rich Today
                </a>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">National Pension Scheme (NPS)</h4>
                    <p class="investmentDesc">
                        This is a voluntary retirement savings scheme with investment options in equity, corporate bonds, and government securities, offering tax benefits. NPS offers a lucrative interest rate ranging between 9%-12%.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Post Office Monthly Income Scheme (POMIS)</h4>
                    <p class="investmentDesc">
                        POMIS is a low-risk investment scheme providing a fixed monthly income, primarily suitable for retirees. Investors can deposit a minimum of ₹1,500 and a maximum of ₹4.5 lakh (for individual accounts) or ₹9 lakh (for
                        joint accounts) in multiples of ₹1,500.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">National Savings Certificate (NSC)</h4>
                    <p class="investmentDesc">NSC, or National Savings Certificate, is a government-backed savings bond with a fixed interest rate (7.7% pa) and tax benefits under Section 80C.</p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Employee Provident Fund (EPF)</h4>
                    <p class="investmentDesc">
                        The Employee Provident Fund (EPF) is a government-mandated retirement savings scheme for salaried employees in India. It is managed by the Employees' Provident Fund Organization (EPFO), which operates under the
                        Ministry of Labour and Employment, Government of India. Currently, it offers an interest rate of 8.15%.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Atal Pension Yojana (APY)</h4>
                    <p class="investmentDesc">
                        This scheme is for unorganized sector workers and offers guaranteed pension benefits after retirement. It offers a fixed pension amount ranging from ₹1,000 to ₹5,000 per month, depending on the subscriber's
                        contribution.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Gold Investment</h4>
                    <p class="investmentDesc">
                        Investing in physical gold or gold-related financial tools can protect against inflation and economic uncertainties. Key methods of gold investment include purchasing physical gold (bullion, coins, jewelry),
                        investing in gold exchange-traded funds (ETFs), buying gold futures contracts, or investing in gold mining stocks.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Real Estate Investment</h4>
                    <p class="investmentDesc">
                        Real estate investment involves purchasing residential, commercial, or industrial properties to generate income. It offers the potential for long-term wealth creation, tax benefits (such as deductions for mortgage
                        interest and depreciation), and portfolio diversification.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Life Insurance</h4>
                    <p class="investmentDesc">
                        Life insurance provides financial protection to the insured's beneficiaries in the case of the insured's death. It offers a lump-sum payment to the beneficiaries, helping them maintain their standard of living and
                        cover financial obligations.
                    </p>
                </div>
            </div>
            <div class="blueBanner-cta">
                <p>Buy Life Insurance plans for a secure, financially-fulfilling future</p>
                <a href="<?=base_url()?>life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=buy-life-insurance-plans-for-a-secure-financially-fulfilling-future">
                    Get a life cover
                </a>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg1"></div>
            <div>
                <h3 class="investmentSubTitle">Medium Risk Investment</h3>
                <p class="investmentDesc">
                    Medium-risk investments balance potential returns and volatility, making them suitable for investors with moderate risk tolerance. These investments typically offer higher returns than low-risk options while also
                    carrying a higher level of risk. Here are some common medium-risk investment options:
                </p>
            </div>
        </div>
        <div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Monthly Income Plans (MIPs)</h4>
                    <p class="investmentDesc">
                        These mutual fund schemes invest in a mix of debt and equity instruments to provide regular income and the potential for capital appreciation. They typically allocate a higher proportion to debt securities, making
                        them relatively less risky than pure equity funds.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Hybrid-Debt Oriented Funds</h4>
                    <p class="investmentDesc">
                        These mutual funds invest in a combination of debt instruments such as bonds and money market securities. They aim to generate stable returns while offering growth potential through equity exposure.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Arbitrage Funds</h4>
                    <p class="investmentDesc">
                        These funds leverage the price differentials in the cash and derivative segments of the stock market to generate returns with minimal risk. They exploit short-term mispricing opportunities, typically resulting in
                        lower volatility than pure equity funds.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Exchange-Traded Funds (ETFs)</h4>
                    <p class="investmentDesc">
                        ETFs are investment funds traded on stock exchanges, representing security options such as stocks, bonds, or commodities. They offer diversification benefits and liquidity like stocks while generally having lower
                        expense ratios compared to mutual funds.
                    </p>
                </div>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg1"></div>
            <div>
                <h3 class="investmentSubTitle">High Risk Investment</h3>
                <p class="investmentDesc">
                    High-risk investments offer the potential for significant returns but come with higher volatility and uncertainty. These investments are typically suitable for investors with a high-risk tolerance and a long-term
                    investment horizon. Here are some common high-risk investment options:
                </p>
            </div>
        </div>
        <div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Unit Linked Insurance Plans (ULIPs)</h4>
                    <p class="investmentDesc">
                        <a href="https://www.kotaklife.com/ulip-plans">ULIPs</a>offer life insurance coverage and investment opportunities in equity, debt, or a combination. They provide the potential for attractive returns over the long
                        term, but the value of investments is subject to market fluctuations.
                    </p>
                </div>
            </div>
            <div class="blueBanner-cta">
                <p>Invest as per your risk appetite to maximize returns over long-term</p>
                <a
                    href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=invest-as-per-your-risk-appetite-to-maximize-returns-over-long-term"
                >
                    Check your options
                </a>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Initial Public Offerings (IPOs)</h4>
                    <p class="investmentDesc">
                        IPOs are the first stock sale by a private company to the public. Investing in IPOs can be highly rewarding if the company experiences significant growth post-listing. However, IPOs are also inherently risky as they
                        involve investing in unproven companies with limited financial track records and uncertainties about future performance.
                    </p>
                </div>
            </div>
            <div class="whatInvestmentPlan-cards">
                <div class="investplansprite investimg4"></div>
                <div>
                    <h4 class="investmentSubTitles">Direct Equity</h4>
                    <p class="investmentDesc">
                        Investing directly in individual stocks on the stock market entails significant risk due to stock prices' volatility and unpredictability. While direct equity investment offers the potential for substantial returns,
                        it also exposes investors to company-specific risks, market fluctuations, and the possibility of capital loss.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="investmentPlans">
    <div class="midWrapper">
        <h2 class="investmentTitle">Benefits of Investment Plans</h2>
        <p class="investmentDesc">Investment plans offer many benefits that contribute to long-term financial stability and prosperity. Here are some of the popular advantages:</p>
        <div class="investmentFlex-wrap">
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Wealth Creation</h3>
                <p class="investmentDesc">
                    Investment plans offer wealth accumulation over time by generating returns on invested capital. Through disciplined and strategic investment, you can accumulate assets and increase your net worth.
                </p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Goal-based Planning</h3>
                <p class="investmentDesc">
                    Investment plans enable individuals to align their investment strategies with specific financial goals. Goal-based planning helps individuals stay focused and disciplined in their investment approach, increasing the
                    likelihood of achieving their goals.
                </p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Protection Against Inflation</h3>
                <p class="investmentDesc">
                    Investing in assets such as stocks, real estate, and commodities can help protect against the erosive effects of inflation. By generating returns that outpace inflation, investment plans preserve the purchasing power of
                    capital over the long term.
                </p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Generating Passive Income</h3>
                <p class="investmentDesc">
                    Certain investment vehicles, such as rental properties, dividend-paying stocks, and bonds, can generate regular passive income streams. These investments provide individuals with additional cash flow, reducing reliance
                    on active income and enhancing financial stability.
                </p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Tax Benefits</h3>
                <p class="investmentDesc">
                    Many investment plans offer tax advantages that help individuals minimize their tax liabilities and optimize their financial position. Some of the tax benefits include tax-deferred growth, contribution deductions, and
                    capital gains tax exemptions.
                </p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Financial Independence</h3>
                <p class="investmentDesc">
                    By building a diversified investment portfolio, individuals can achieve financial independence. Investment income can supplement or replace active income, giving individuals greater autonomy and freedom in their
                    financial decisions.
                </p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Flexibility in Investments</h3>
                <p class="investmentDesc">
                    Investment plans offer flexibility regarding asset allocation, investment horizon, and risk tolerance, allowing individuals to tailor their investment strategies to suit their unique circumstances and preferences.
                </p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Ensuring Long-term Financial Security</h3>
                <p class="investmentDesc">
                    Investing consistently can help secure their financial future and weather economic uncertainties. By accumulating assets and generating returns over the long term, investment plans provide a foundation for financial
                    security and resilience.
                </p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Death Risk Coverage (Unit Linked Insurance Plans)</h3>
                <p class="investmentDesc">
                    ULIPs offer the dual benefits of investment growth potential and<a href="https://www.kotaklife.com/">life insurance coverage.</a>In the event of the policyholder's demise, ULIPs provide financial protection to the
                    beneficiary, ensuring continuity of financial support for the family's future.
                </p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Retirement Savings</h3>
                <p class="investmentDesc">Retirement-focused investments such as pension plans, annuities, and employer-sponsored retirement accounts provide individuals with a reliable source of income post-retirement.</p>
            </div>
            <div class="benefitsPlans-card">
                <h3 class="investmentSubTitle">Life Insurance Coverage</h3>
                <p class="investmentDesc">
                    Specific investment plans, such as ULIPs and endowment plans, offer life insurance coverage and investment benefits. These plans provide financial protection to the policyholder's family during premature death.
                </p>
            </div>
        </div>
        <div class="blueBanner-cta">
            <p>Plan your retirement right with the right investments.</p>
            <a href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=plan-your-retirement-right-with-the-right-investments.">Take a step, now!</a>
        </div>
    </div>
</section>
<section id="investmentPlans">
    <div class="midWrapper">
        <h2 class="investmentTitle">How to Choose an ideal Investment Plan?</h2>
        <p class="investmentDesc">Choosing an ideal investment plan depends on your goals and risk tolerance. Here are some easy steps to follow:</p>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg2"><span>01</span></div>
            <div>
                <h3 class="investmentSubTitle">Know your Goals</h3>
                <p class="investmentDesc">Determine if you are saving for retirement (long-term), a down payment (medium-term), or an emergency fund (short-term). It will help you decide what to invest in.</p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg2"><span>02</span></div>
            <div>
                <h3 class="investmentSubTitle">Risk Tolerance</h3>
                <p class="investmentDesc">Different goals have different risk tolerances. Analyze how comfortable you are with potential losses. Higher potential returns often come with higher risk.</p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg2"><span>03</span></div>
            <div>
                <h3 class="investmentSubTitle">Investment Horizon</h3>
                <p class="investmentDesc">Always consider your time horizon when investing. Long-term goals may require riskier investments like stocks, while short-term goals may require safer options like savings accounts.</p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg2"><span>04</span></div>
            <div>
                <h3 class="investmentSubTitle">Diversify</h3>
                <p class="investmentDesc">Never put all your eggs in one basket. Spread your investments across different asset classes (stocks, bonds, and real estate) to minimize risk.</p>
            </div>
        </div>
    </div>
</section>
<section id="investmentPlans">
    <div class="midWrapper">
        <h2 class="investmentTitle">Documents Required to Buy an Investment Plan in India</h2>
        <p class="investmentDesc">
            The specific documents required to purchase an investment plan in India can vary depending on the type of investment, financial institution, and regulatory requirements. However, here is a general list of documents commonly
            needed:
        </p>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg3"></div>
            <div>
                <h3 class="investmentSubTitle">Know Your Customer (KYC) Documents</h3>
                <p class="investmentDesc">These documents are essential for verifying the identity and address of the investor as per regulatory guidelines. Common KYC documents include:</p>
                <ul class="investmentList">
                    <li>● Proof of Identity: Passport, Aadhaar card, Voter ID, PAN card, Driving License, or Government-issued photo ID card.</li>
                    <li>● Proof of Address: Aadhaar card, Passport, Voter ID, Utility bills, or Bank or Post Office Passbook.</li>
                </ul>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg3"></div>
            <div>
                <h3 class="investmentSubTitle">Income Proof</h3>
                <p class="investmentDesc">Some investment plans may require proof of income to determine eligibility or assess risk. Income proof documents may include salary slips, income tax returns (ITR), Form 16, or bank statements.</p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg3"></div>
            <div>
                <h3 class="investmentSubTitle">Bank Account Details</h3>
                <p class="investmentDesc">
                    For transactions related to investments, such as fund transfers, dividend payments, or redemption proceeds, you will need to provide your bank account details. It includes the bank account number, IFSC code, and a
                    canceled cheque or bank statement as proof.
                </p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg3"></div>
            <div>
                <h3 class="investmentSubTitle">PAN Card</h3>
                <p class="investmentDesc">
                    The Permanent Account Number (PAN) card is essential for all financial transactions exceeding certain thresholds per Income Tax regulations. It is required for opening investment accounts, making investments, and for tax
                    reporting purposes.
                </p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg3"></div>
            <div>
                <h3 class="investmentSubTitle">Photographs</h3>
                <p class="investmentDesc">You may be required to provide recent passport-size photographs for identity verification and documentation.</p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg3"></div>
            <div>
                <h3 class="investmentSubTitle">Nomination Form</h3>
                <p class="investmentDesc">If you wish to nominate a beneficiary for your investment plan, you may need to fill out a nomination form specifying the nominee's details, relationship, and share of benefits.</p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg3"></div>
            <div>
                <h3 class="investmentSubTitle">Additional Documents</h3>
                <p class="investmentDesc">Depending on the specific requirements of the investment plan or the financial institution, you may be asked to provide additional documents or declarations as deemed necessary.</p>
            </div>
        </div>
    </div>
</section>
<section id="investmentPlans">
    <div class="midWrapper">
        <h2 class="investmentTitle">Factors to Consider While Choosing an Investment Plan in India</h2>
        <p class="investmentDesc">
            Choosing<a href="https://www.kotaklife.com/insurance-guide/wealth-creation/top-10-investment-plans-available-in-india" class="inline-links">investment options</a>in India requires careful consideration of various factors to
            align with your financial goals, risk tolerance, and time horizon. Here are key factors to consider:
        </p>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg1"></div>
            <div>
                <h3 class="investmentSubTitle">Financial Goals</h3>
                <p class="investmentDesc">
                    Define your short-term, medium-term, and long-term financial objectives. Whether you are accumulating wealth, planning for retirement, or buying a house, your investment plan should be tailored to meet these goals.
                </p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg1"></div>
            <div>
                <h3 class="investmentSubTitle">Risk Tolerance</h3>
                <p class="investmentDesc">Assess your risk tolerance, which refers to your willingness and ability to withstand fluctuations in the value of your investments.</p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg1"></div>
            <div>
                <h3 class="investmentSubTitle">Investment Horizon</h3>
                <p class="investmentDesc">
                    Determine your investment time horizon, which is the duration over which you plan to hold your investments. Short-term goals require more conservative investments, while long-term goals can afford to take on more risk
                    for higher returns.
                </p>
            </div>
        </div>
        <div class="blueBanner-cta">
            <p>Short-term or long-term, one plan can do it all!</p>
            <a href="https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=short-term-or-long-term-one-plan-can-do-it-all!">
                Check the Plan
            </a>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg1"></div>
            <div>
                <h3 class="investmentSubTitle">Diversification</h3>
                <p class="investmentDesc">
                    Spread your investments across different asset classes, such as stocks, bonds, real estate, and commodities, to minimize risk and optimize returns. Diversification helps mitigate the impact of market fluctuations.
                </p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg1"></div>
            <div>
                <h3 class="investmentSubTitle">Liquidity Needs</h3>
                <p class="investmentDesc">Choose investment options that align with your liquidity needs, whether immediate access to funds or long-term growth with limited liquidity.</p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg1"></div>
            <div>
                <h3 class="investmentSubTitle">Tax Implications</h3>
                <p class="investmentDesc">
                    Evaluate the tax implications of different investment options, including tax benefits, exemptions, and liabilities. Optimize your investment portfolio to maximize tax efficiency and minimize the impact of taxes on your
                    returns.
                </p>
            </div>
        </div>
        <div class="investmentFlex-start">
            <div class="investplansprite investimg1"></div>
            <div>
                <h3 class="investmentSubTitle">Regulatory Compliance</h3>
                <p class="investmentDesc">
                    Ensure that the investment products and providers comply with regulatory standards and guidelines set by regulatory authorities such as the Securities and Exchange Board of India (SEBI) and the Insurance Regulatory and
                    Development Authority of India (IRDAI).
                </p>
            </div>
        </div>
    </div>
</section>
<section id="investmentPlans " class="investspace">
    <div class="midWrapper">
        <h2 class="investmentTitle">Conclusion</h2>
        <p class="investmentDesc">
            An investment plan is a strategic roadmap designed to help individuals achieve their financial goals by carefully allocating resources across various assets. Understanding the types of investment plans available in India,
            ranging from low-risk to high-risk options, allows investors to tailor their strategies based on their risk tolerance and objectives.
        </p>
    </div>
</section>
<section>
    <div class="midWrapper">
        <h2 class="mb-20 term-tags fnt-24">FAQs on Investment Plans</h2>
        <div class="accordion-div accordion-btns accordion-btns-gsp mt-mob-15">
            <div class="bor">
                <div class="accordion bor-top-zero" role="heading" aria-level="3">
                    <span>1.</span>
                    <h3>Which is an ideal investment plan in India?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align"><p>An ideal investment plan in India varies depending on the investor's personal financial goals and risk tolerance.</p></div>
            </div>
            <div class="bor">
                <div class="accordion">
                    <span>2.</span>
                    <h3>Which investment gives the highest return?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <div class=""><p>Equity investments historically offer the potential for the highest returns over the long term.</p></div>
                </div>
            </div>
            <div class="bor">
                <div class="accordion">
                    <span>3.</span>
                    <h3>How can I earn ₹50,000 per month in investment?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <div class=""><p>Earning ₹50,000 per month through investments requires a diversified portfolio tailored to your risk profile and financial goals.</p></div>
                </div>
            </div>
            <div class="bor">
                <div class="accordion">
                    <span>4.</span>
                    <h3>What is the difference between savings and investment plans?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <div class=""><p>A savings plan focuses on preserving capital with minimal risk, while an investment plan aims to grow wealth by allocating funds to various assets.</p></div>
                </div>
            </div>
            <div class="bor">
                <div class="accordion">
                    <span>5.</span>
                    <h3>How can I start investing in my early 20s?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <div class=""><p>Investing in your early 20s involves setting clear financial goals, educating yourself about investment options, and prioritizing long-term growth over short-term gains.</p></div>
                </div>
            </div>
            <div class="bor">
                <div class="accordion">
                    <span>6.</span>
                    <h3>Which is an ideal monthly investment plan?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <div class=""><p>An ideal monthly investment plan depends on individual preferences, goals, and risk tolerance. Consider options like SIPs in mutual funds or recurring deposits.</p></div>
                </div>
            </div>
            <div class="bor">
                <div class="accordion">
                    <span>7.</span>
                    <h3>How much can I withdraw from my investments?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <div class=""><p>The amount you can withdraw from your investments depends on factors such as the type of investment, market conditions, and any penalties or restrictions associated with early withdrawal.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-20">
    <div class="midWrapper mt-20">
        <h2 class="mb-20 term-tags fnt-24 mt-20">Suggested Readings</h2>
        <div class="suggestion">
            <p>
                <b><span>1.</span><a href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-is-investment" title="">What is Investment?</a><br /></b>
            </p>
            <p>
                <b><span>2.</span><a href="https://www.kotaklife.com/insurance-guide/about-life-insurance/staying-insured-while-investing" title="">Stay Insured While Investing</a></b>
            </p>
        </div>
        <div class="consumer consumer-text hide-mobile pb-0"><h3 class="ls1">- A Consumer Education Initiative series by Kotak Life</h3></div>
    </div>
</section>
<section class="rating-section ratingHtml">
    <div class="midWrapper">
        <div class="container">
            <div class="feedback-container">
                <div class="share-side">
                    <div class="text-center">
                        <h2 class="overall-ratingtxt">Overall ratings</h2>
                        <p class="votedCount-text">Rated by<span class="votedCount">32032</span>Customers</p>
                    </div>
                    <div class="stars-bg">
                        <div class="rating-img"></div>
                        <p class="actual-ratings">4.7</p>
                    </div>
                </div>
                <div class="verticalBorder"></div>
                <div class="review-side">
                    <div class="rating-widget">
                        <div class="rating-stars text-left">
                            <p class="infoText">Thank you for your feedback!</p>
                            <div class="stars-btn">
                                <form id="my_radio_box">
                                    <div class="rating">
                                        <input type="radio" name="rating" value="Excellent" id="rating-5" checked="checked" disabled="disabled" /><label for="rating-5"></label>
                                        <input type="radio" name="rating" value="Best" id="rating-4" disabled="disabled" /><label for="rating-4"></label><input type="radio" name="rating" value="Good" id="rating-3" disabled="disabled" />
                                        <label for="rating-3"></label><input type="radio" name="rating" value="Fair" id="rating-2" disabled="disabled" /><label for="rating-2"></label>
                                        <input type="radio" name="rating" value="Satifactory" id="rating-1" disabled="disabled" /><label for="rating-1"></label>
                                    </div>
                                </form>
                                <div class="submitDiv" style="display: none;"><button type="submit" class="submitBtn">Submit Rating</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="votedcheck d-block"></div>
            </div>
        </div>
    </div>
</section>
<section class="terms new-terms" id="terms-conditions">
    <div class="midWrapper">
        <button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits and Plan Disclaimer</button>
        <div class="content-col mb-0 tab-align li-disc disclaimer">
            <p class="pl-0">Customer is the advised to go through the sales brochure before conducting any sale.</p>
            <p class="pl-0">
                You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to
                take an independent view from tax consultant
            </p>
            <p class="pl-0 space-2"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS /FRAUDULENT OFFERS</b></p>
            <p class="pl-0">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
            <p class="pl-0">
                Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN : U66030MH2000PLC128503, Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400 051. Website: https://www.kotaklife.com,
                |Whatsapp:9321003007 |Toll free No: 1800 209 8800.
            </p>
            <p class="pl-0">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
        </div>
    </div>
</section>
<script>
    setTimeout(function () {
        $("#term-blogs").slick({
            infinite: !1,
            arrows: !0,
            dots: !1,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{ breakpoint: 1024, settings: { slidesToShow: 2, slidesToScroll: 1 }, breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }],
        });
        var s,
            e = document.getElementsByClassName("collapsible");
        for (s = 0; s < e.length; s++)
            e[s].addEventListener("click", function () {
                this.classList.toggle("active");
                var s = this.nextElementSibling;
                "block" === s.style.display ? (s.style.display = "none") : (s.style.display = "block");
            });
    }, 2e3);
</script>
<script>
    function readMoreHra() {
        var e = document.getElementById("dots"),
            n = document.getElementById("more"),
            t = document.getElementById("myBtn");
        "none" === e.style.display
            ? ((e.style.display = "inline"), (t.innerHTML = "Read more"), n.classList.remove("active"), (n.style.display = "none"))
            : ((e.style.display = "none"), (t.innerHTML = " Read less"), n.classList.add("active"), (n.style.display = "inline"));
    }
</script>
<script>
    var rating = "";
    setTimeout(function () {
        $(".submitBtn").on("click", function () {
            $("input[name=rating]:checked").val() && (rating = $("input[name=rating]:checked").val()),
                $.ajax({
                    url: "<?= base_url() ?>site/feedbackrating",
                    type: "post",
                    data: { rating: rating, pagename: "investment_plan", fixed: "32000" },
                    success: function (t) {
                        var e = $.parseJSON(t);
                        $(".votedCount").html(e.feedbackratingdetailscount + " ");
                        localStorage.setItem("investment_rating", rating);
                        $(".infoText").html("Thank you for your feedback!");
                        $(".rating").addClass("afterClick"), $(".submitDiv").fadeOut("slow"), $(".votedcheck").removeClass("d-none"), $(".votedcheck").addClass("d-block");
                    },
                });
        });
    }, 3e3),
        $.ajax({
            url: "<?= base_url() ?>site/ratingRetrieve",
            type: "post",
            data: { rating: localStorage.getItem("investment_rating"), pagename: "investment_plan", fixed: "32000", ratingCount1: "4.7" },
            success: function (t) {
                var e = $.parseJSON(t);
                console.log(e), $(".ratingHtml").html(e.ratingHtml);
            },
        });
</script>
