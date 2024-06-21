<?php include('assets/includes/config.php'); 
if (!isset($_SESSION['username'])) {
    header("Location: loginPage.php");
    exit();
}

 

$recipientName = $_SESSION['username'];
$issuedDate = date("F j, Y"); // Get the current date

$achievement = "Unknown";
$ytlink="https://www.youtube.com/embed/VIDEOID";
$course = $_GET['course'];

switch ($course) {
    case "CID1":
        $questions = array(
            "Which of the following is NOT a digital marketing channel?",
            "What is the primary goal of search engine optimization (SEO)?",
            "What does CTR stand for in digital marketing?",
            "What is the purpose of A/B testing in digital advertising?",
            "What is a conversion in the context of digital marketing?",
            "What is the main advantage of using social media for marketing?",
            "What is the purpose of a landing page in a digital marketing campaign?",
            "What is the concept of remarketing in digital advertising?",
            "What does ROI stand for in digital marketing?",
            "What is the role of keywords in content marketing?",
            "What is the purpose of a call-to-action (CTA) in marketing?",
            "What is the significance of responsive web design in digital marketing?",
            "What is the difference between organic and paid search results?",
            "What is the role of email marketing in digital campaigns?",
            "What is the purpose of audience targeting in online advertising?",
            "What is the importance of content marketing in SEO?",
            "What is influencer marketing in the context of digital campaigns?",
            "What is the goal of social media engagement?",
            "What is the purpose of a sales funnel in digital marketing?",
            "What is the concept of user-generated content (UGC)?"
        );

        $answers = array(
            "d",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b"
        );

        $options = array(
            array("A) SEO", "B) Email marketing", "C) Content marketing", "D) Print advertising"),
            array("A) Increase website traffic", "B) Improve search engine rankings", "C) Boost social media engagement", "D) Generate sales leads"),
            array("A) Click-through rate", "B) Cost per click", "C) Conversion rate", "D) Customer retention rate"),
            array("A) To test different ad copy", "B) To optimize website load speed", "C) To monitor social media mentions", "D) To track email open rates"),
            array("A) Acquiring a new customer", "B) Making a sale", "C) Website visit", "D) Social media share"),
            array("A) Broad reach and potential audience", "B) Low cost and affordability", "C) Real-time customer interaction", "D) Detailed performance tracking"),
            array("A) To showcase company awards", "B) To collect customer feedback", "C) To capture visitor information", "D) To promote social media campaigns"),
            array("A) Displaying ads to a specific target audience", "B) Promoting ads on multiple devices", "C) Repeating ads at regular intervals", "D) Personalizing ads based on user preferences"),
            array("A) Return on investment", "B) Reach of impressions", "C) Revenue from online sales", "D) Ratio of website visits to conversions"),
            array("A) To improve search engine rankings", "B) To analyze website traffic", "C) To target ads to specific audiences", "D) To enhance user experience"),
            array("A) To inform customers about product features", "B) To encourage immediate purchase", "C) To build brand awareness", "D) To provide customer support"),
            array("A) It improves website loading speed", "B) It enhances mobile user experience", "C) It boosts social media engagement", "D) It increases search engine rankings"),
            array("A) Organic search results are free, while paid search results require a fee", "B) Organic search results appear higher in search engine rankings", "C) Paid search results are more relevant to user queries", "D) Paid search results have higher click-through rates"),
            array("A) Sending personalized messages to a target audience", "B) Promoting products through influencers", "C) Analyzing customer behavior through emails", "D) Gathering customer feedback via email surveys"),
            array("A) To deliver ads to a specific demographic", "B) To create custom landing pages", "C) To track user behavior on a website", "D) To optimize ad placement on search engines"),
            array("A) Content marketing improves website visibility", "B) Content marketing increases keyword rankings", "C) Content marketing enhances user experience", "D) Content marketing improves website load speed"),
            array("A) Collaborating with influential individuals to promote products", "B) Implementing social media sharing buttons on websites", "C) Targeting ads based on user preferences", "D) Encouraging user-generated content on social media"),
            array("A) To increase brand recognition", "B) To generate website traffic", "C) To drive sales and conversions", "D) To encourage social media shares"),
            array("A) To guide customers through the purchasing process", "B) To collect customer contact information", "C) To improve website navigation", "D) To enhance user engagement on social media"),
            array("A) Content created by users that promotes a brand", "B) Content developed by marketing agencies", "C) Content optimized for search engines", "D) Content shared on social media platforms")
        );
        $achievement = "Digital Marketing";
        $ytlink="https://www.youtube.com/embed/G6DmDqYLWL8";
        break;
    case "CID2":
        $questions = array(
            "What is supervised learning?",
            "What is unsupervised learning?",
            "What is reinforcement learning?",
            "What is the difference between classification and regression?",
            "What is overfitting in machine learning?",
            "What is feature selection?",
            "What is the purpose of cross-validation in machine learning?",
            "What is the difference between precision and recall?",
            "What is the bias-variance tradeoff?",
            "What is the curse of dimensionality in machine learning?",
            "What is the purpose of regularization?",
            "What is the difference between bagging and boosting?",
            "What is the role of activation functions in neural networks?",
            "What is gradient descent?",
            "What is the difference between batch gradient descent and stochastic gradient descent?",
            "What is a decision tree?",
            "What is ensemble learning?",
            "What is the purpose of clustering algorithms?",
            "What is the difference between k-means and hierarchical clustering?",
            "What is the purpose of dimensionality reduction in machine learning?"
        );
        
        $answers = array(
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "a",
            "b"
        );
        
        $options = array(
            array("A) Learning with labeled data", "B) Learning without labels", "C) Learning with rewards", "D) Learning without data"),
            array("A) Learning with labeled data", "B) Learning without labels", "C) Learning with rewards", "D) Learning without data"),
            array("A) Learning with labeled data", "B) Learning without labels", "C) Learning with rewards", "D) Learning without data"),
            array("A) Classification predicts categories, while regression predicts numerical values", "B) Classification predicts numerical values, while regression predicts categories", "C) Classification and regression are the same", "D) Classification and regression are not related"),
            array("A) The model is too simple and underfits the data", "B) The model is too complex and memorizes the data", "C) The model is balanced and fits the data well", "D) The model cannot make predictions"),
            array("A) Selecting the most important features for model training", "B) Selecting all available features for model training", "C) Selecting features randomly for model training", "D) Selecting irrelevant features for model training"),
            array("A) Evaluating the performance of a model", "B) Preventing overfitting", "C) Improving model accuracy", "D) Selecting the best model"),
            array("A) Precision measures the ability to avoid false positives, while recall measures the ability to avoid false negatives", "B) Precision measures the ability to avoid false negatives, while recall measures the ability to avoid false positives", "C) Precision and recall are the same", "D) Precision and recall are not related"),
            array("A) The tradeoff between model complexity and model flexibility", "B) The tradeoff between model accuracy and model simplicity", "C) The tradeoff between model bias and model variance", "D) The tradeoff between model underfitting and model overfitting"),
            array("A) The increase in data volume leads to increased computational requirements", "B) The increase in data dimensionality leads to increased model complexity", "C) The increase in data variety leads to increased model flexibility", "D) The increase in data velocity leads to increased model accuracy"),
            array("A) Adding a penalty term to the loss function to prevent overfitting", "B) Adding more training examples to improve model performance", "C) Adding more features to increase model complexity", "D) Adding more layers to the neural network"),
            array("A) Bagging trains multiple models independently, while boosting trains models sequentially", "B) Bagging trains models sequentially, while boosting trains multiple models independently", "C) Bagging and boosting are the same", "D) Bagging and boosting are not related"),
            array("A) Activation functions introduce non-linearity to the neural network", "B) Activation functions normalize the input data", "C) Activation functions reduce the dimensionality of the input data", "D) Activation functions control the learning rate of the neural network"),
            array("A) An optimization algorithm used to update model parameters", "B) A measurement of model performance", "C) A regularization technique", "D) A type of neural network architecture"),
            array("A) Batch gradient descent updates model parameters after processing the entire training dataset", "B) Stochastic gradient descent updates model parameters after processing a single training example", "C) Batch gradient descent and stochastic gradient descent are the same", "D) Batch gradient descent and stochastic gradient descent are not related"),
            array("A) A tree-based model used for classification", "B) A decision-making process based on rules and conditions", "C) A clustering algorithm for unsupervised learning", "D) A visualization technique for high-dimensional data"),
            array("A) Combining predictions from multiple models to improve performance", "B) Training a single model with multiple datasets", "C) Converting continuous data into categorical data", "D) Converting categorical data into continuous data"),
            array("A) Grouping similar data points together", "B) Reducing the dimensionality of data", "C) Finding outliers in the dataset", "D) Converting categorical data into numerical data"),
            array("A) K-means is a centroid-based clustering algorithm, while hierarchical clustering is a connectivity-based clustering algorithm", "B) K-means and hierarchical clustering are the same", "C) K-means is a density-based clustering algorithm, while hierarchical clustering is a partition-based clustering algorithm", "D) K-means is a hierarchical clustering algorithm, while hierarchical clustering is a centroid-based clustering algorithm"),
            array("A) To reduce the dimensionality of data while preserving its information", "B) To increase the dimensionality of data for better visualization", "C) To preprocess data for model training", "D) To create additional features for model training")
        );
        
        $achievement = "Machine Learning";
        $ytlink="https://www.youtube.com/embed/NWONeJKn6kc";
        break;
    case "CID3":
        $questions = array(
            "What is the purpose of HTML in web development?",
            "What does CSS stand for?",
            "What is the role of JavaScript in web development?",
            "What is the purpose of a database in a web application?",
            "What is the difference between front-end and back-end development?",
            "What is the function of a web server?",
            "What is the purpose of version control in software development?",
            "What is the role of API in web development?",
            "What is the significance of responsive design in web development?",
            "What are the popular programming languages used for back-end development?",
            "What is the purpose of a framework in web development?",
            "What is the importance of security in web applications?",
            "What is the role of cookies in web development?",
            "What is the purpose of testing in software development?",
            "What is the concept of deployment in web development?",
            "What are the key principles of user interface (UI) design?",
            "What is the role of caching in web development?",
            "What is the purpose of cross-browser compatibility in web development?",
            "What is the significance of performance optimization in web applications?",
            "What is the role of user experience (UX) design in web development?"
        );
        
        $answers = array(
            "a",
            "c",
            "b",
            "d",
            "b",
            "c",
            "a",
            "d",
            "b",
            "c",
            "a",
            "d",
            "c",
            "b",
            "a",
            "d",
            "b",
            "c",
            "a",
            "d"
        );
        
        $options = array(
            array("A) Structuring the content and layout of a web page", "B) Styling the web page", "C) Adding interactivity to the web page", "D) Handling server-side operations"),
            array("A) Cascading Style Sheets", "B) Computer Style Sheets", "C) Creative Style Sheets", "D) Control Style Sheets"),
            array("A) To define the structure and layout of a web page", "B) To add interactivity and dynamic features to a web page", "C) To style the web page", "D) To handle server-side operations"),
            array("A) To store and manage data for the web application", "B) To enhance the visual appearance of the web application", "C) To handle user interactions on the web application", "D) To optimize the performance of the web application"),
            array("A) Front-end development focuses on the user interface, while back-end development focuses on server-side operations", "B) Front-end development involves client-side programming, while back-end development involves server-side programming", "C) Front-end development is related to design, while back-end development is related to functionality", "D) Front-end development is responsible for database management, while back-end development handles the user interface"),
            array("A) To host and deliver web applications to users", "B) To store and manage website content", "C) To handle incoming client requests and serve responses", "D) To manage user authentication and authorization"),
            array("A) To track and manage different versions of source code", "B) To improve the performance of web applications", "C) To optimize database queries", "D) To handle user authentication and authorization"),
            array("A) It allows different software systems to communicate and interact with each other", "B) It provides pre-built functionality and libraries for faster development", "C) It improves the performance and scalability of web applications", "D) It ensures cross-browser compatibility of web pages"),
            array("A) It ensures that web applications adapt to different screen sizes and devices", "B) It enhances the security of web applications", "C) It improves the performance of web applications", "D) It provides a better user experience through interactive elements"),
            array("A) Python and Django", "B) Java and Spring", "C) Ruby and Ruby on Rails", "D) PHP and Laravel"),
            array("A) To provide a starting point and reusable components for web application development", "B) To handle server-side operations and database management", "C) To improve the security and performance of web applications", "D) To create responsive and user-friendly interfaces"),
            array("A) Security is essential to protect user data and prevent unauthorized access", "B) Security is optional and can be ignored for small-scale web applications", "C) Security is the responsibility of the hosting provider, not the developer", "D) Security measures are only necessary for e-commerce websites"),
            array("A) Cookies store user preferences and enable personalized experiences", "B) Cookies enhance the visual appearance of web pages", "C) Cookies optimize database queries for better performance", "D) Cookies track user behavior and collect marketing data"),
            array("A) To identify and fix bugs and errors in the software", "B) To create visually appealing user interfaces", "C) To optimize web applications for better performance", "D) To analyze user behavior and improve the user experience"),
            array("A) Deployment involves making a web application accessible on the internet", "B) Deployment refers to the process of optimizing web pages for search engines", "C) Deployment involves securing the web application from cyber attacks", "D) Deployment refers to the initial design and planning phase of web development"),
            array("A) Consistency, simplicity, and responsiveness", "B) Creativity, innovation, and uniqueness", "C) Speed, efficiency, and scalability", "D) Flexibility, adaptability, and customization"),
            array("A) Caching improves the performance of web applications by storing frequently accessed data", "B) Caching ensures cross-browser compatibility of web pages", "C) Caching enhances the security of web applications", "D) Caching allows websites to adapt to different screen sizes and devices"),
            array("A) Cross-browser compatibility ensures that web applications work consistently across different web browsers", "B) Cross-browser compatibility improves the search engine rankings of web applications", "C) Cross-browser compatibility enhances the visual appearance of web pages", "D) Cross-browser compatibility increases the speed and performance of web applications"),
            array("A) Performance optimization improves the loading speed and responsiveness of web applications", "B) Performance optimization enhances the security of web applications", "C) Performance optimization focuses on visual design and aesthetics", "D) Performance optimization is irrelevant for small-scale web applications"),
            array("A) UX design ensures that web applications are user-friendly and intuitive", "B) UX design is mainly concerned with visual design and aesthetics", "C) UX design is not essential for small-scale web applications", "D) UX design focuses on optimizing database queries and server-side operations")
        );
        $achievement = "Full-Stack Development";
        $ytlink="https://www.youtube.com/embed/nu_pCVPKzTk";
        break;
    case "CID4":

    $questions = array(
        "What is data science?",
        "What are the main steps involved in the data science process?",
        "What is the difference between supervised and unsupervised learning?",
        "What is feature selection in machine learning?",
        "What is the purpose of cross-validation in model evaluation?",
        "What is the role of regularization in machine learning?",
        "What is the curse of dimensionality?",
        "What is the difference between overfitting and underfitting in machine learning?",
        "What are the common algorithms used for dimensionality reduction?",
        "What is the purpose of clustering in data analysis?",
        "What is the difference between classification and regression?",
        "What is the bias-variance tradeoff in machine learning?",
        "What is the difference between precision and recall?",
        "What is the area under the ROC curve (AUC-ROC)?",
        "What is ensemble learning?",
        "What is the role of gradient descent in machine learning?",
        "What is the purpose of feature engineering in data science?",
        "What are some techniques for handling missing data in a dataset?",
        "What is the difference between bagging and boosting?",
        "What is the purpose of outlier detection in data analysis?"
    );

    $answers = array(
        "c",
        "d",
        "a",
        "b",
        "c",
        "d",
        "a",
        "b",
        "c",
        "d",
        "a",
        "b",
        "c",
        "d",
        "a",
        "b",
        "c",
        "d",
        "a",
        "b"
    );

    $options = array(
        array("A) A branch of computer science", "B) Analyzing historical data", "C) Extracting insights from data", "D) All of the above"),
        array("A) Data collection, data preprocessing, model building, model evaluation", "B) Data collection, model building, data preprocessing, model evaluation", "C) Model evaluation, model building, data preprocessing, data collection", "D) Data preprocessing, data collection, model building, model evaluation"),
        array("A) Supervised learning uses labeled data, while unsupervised learning uses unlabeled data", "B) Supervised learning is used for regression, while unsupervised learning is used for classification", "C) Supervised learning requires more computational resources than unsupervised learning", "D) Supervised learning is more accurate than unsupervised learning"),
        array("A) Selecting the most important features for model training", "B) Removing outliers from the dataset", "C) Transforming categorical variables into numerical ones", "D) Dividing the dataset into training and testing sets"),
        array("A) To ensure the model performs well on unseen data", "B) To speed up the training process", "C) To handle missing values in the dataset", "D) To reduce overfitting and improve generalization"),
        array("A) Regularization prevents overfitting by adding a penalty term to the model's cost function", "B) Regularization increases the complexity of the model to capture more patterns in the data", "C) Regularization improves the interpretability of the model's coefficients", "D) Regularization is only applicable to linear models"),
        array("A) The phenomenon where the number of features is much larger than the number of samples", "B) The process of transforming categorical variables into numerical ones", "C) The technique used to handle missing values in a dataset", "D) The measure of how well a model fits the training data"),
        array("A) Overfitting occurs when a model is too complex and captures noise in the training data, while underfitting occurs when a model is too simple and fails to capture the underlying patterns", "B) Overfitting occurs when a model has high bias, while underfitting occurs when a model has high variance", "C) Overfitting is caused by underestimating the model's coefficients, while underfitting is caused by overestimating the model's coefficients", "D) Overfitting occurs in regression models, while underfitting occurs in classification models"),
        array("A) Principal Component Analysis (PCA), t-SNE, Singular Value Decomposition (SVD)", "B) Logistic Regression, Decision Trees, Random Forests", "C) K-means, DBSCAN, Hierarchical clustering", "D) Support Vector Machines, Naive Bayes, K-nearest neighbors"),
        array("A) To group similar data points together based on their characteristics", "B) To classify data points into predefined categories", "C) To predict continuous values based on input features", "D) To handle missing values in a dataset"),
        array("A) Classification is used for predicting categorical labels, while regression is used for predicting continuous values", "B) Classification models use decision trees, while regression models use linear regression", "C) Classification requires labeled data, while regression can work with both labeled and unlabeled data", "D) Classification models are more accurate than regression models"),
        array("A) The tradeoff between the model's ability to fit the training data and its ability to generalize to unseen data", "B) The tradeoff between the bias and variance of a model", "C) The tradeoff between precision and recall in binary classification", "D) The tradeoff between the number of features and the number of samples in a dataset"),
        array("A) Precision measures the model's ability to correctly identify positive cases, while recall measures the model's ability to find all positive cases", "B) Precision measures the model's ability to find all positive cases, while recall measures the model's ability to correctly identify positive cases", "C) Precision is the ratio of true positive predictions to the total number of positive predictions, while recall is the ratio of true positive predictions to the total number of actual positive cases", "D) Precision is the area under the Precision-Recall curve, while recall is the area under the Receiver Operating Characteristic (ROC) curve"),
        array("A) A measure of the model's ability to distinguish between positive and negative classes", "B) A measure of the model's accuracy in predicting continuous values", "C) A measure of the model's performance across different thresholds", "D) A measure of the model's interpretability and simplicity"),
        array("A) Training multiple models and combining their predictions for improved performance", "B) Training a single model on multiple datasets", "C) Training a model with a large number of features", "D) Training a model with a large number of samples"),
        array("A) An optimization algorithm used to minimize the cost function in machine learning models", "B) A technique used to visualize high-dimensional data in two or three dimensions", "C) A method for handling missing values in a dataset", "D) A process of transforming raw data into a suitable format for machine learning algorithms"),
        array("A) To create new features from existing ones to improve the performance of machine learning models", "B) To remove irrelevant features from the dataset", "C) To convert categorical variables into numerical ones", "D) To scale the features to a common range for better model performance"),
        array("A) Imputation using mean, median, or mode values", "B) Removing the rows with missing data", "C) Using advanced machine learning algorithms to predict missing values", "D) Ignoring missing data and using the available information"),
        array("A) Bagging involves training multiple models on different subsets of the training data, while boosting involves training multiple models sequentially, with each model correcting the mistakes of the previous model", "B) Bagging is a technique for handling missing data, while boosting is a technique for handling outliers", "C) Bagging focuses on reducing variance, while boosting focuses on reducing bias", "D) Bagging is an unsupervised learning technique, while boosting is a supervised learning technique"),
        array("A) To identify and handle data points that deviate significantly from the majority of the dataset", "B) To preprocess the data and normalize it for better model performance", "C) To identify and remove irrelevant features from the dataset", "D) To convert categorical variables into numerical ones")
    );
        $achievement = "Data Science";
        $ytlink="https://www.youtube.com/embed/aGu0fbkHhek";
        break;
    case "CID5":
        $questions = array(
            "Which programming language is commonly used for game development?",
            "What is the purpose of a game engine?",
            "What is the role of a level designer in game development?",
            "What does FPS stand for in the context of video games?",
            "What is the purpose of collision detection in games?",
            "What is the term for a small section of a game world that loads and unloads dynamically?",
            "What is the difference between 2D and 3D game development?",
            "What is the purpose of game testing?",
            "What is the concept of game monetization?",
            "What is the role of artificial intelligence (AI) in game development?",
            "What is the purpose of game physics?",
            "What is the significance of game optimization?",
            "What is the role of sound design in games?",
            "What is the concept of game balancing?",
            "What is the difference between single-player and multiplayer games?",
            "What is the purpose of game marketing?",
            "What is the role of game analytics?",
            "What is the concept of procedural generation in games?",
            "What is the purpose of game localization?",
            "What is the role of storytelling in game development?"
        );
    
        $answers = array(
            "a",
            "c",
            "b",
            "d",
            "a",
            "c",
            "b",
            "a",
            "d",
            "b",
            "c",
            "a",
            "b",
            "d",
            "c",
            "a",
            "b",
            "d",
            "c",
            "a"
        );
    
        $options = array(
            array("A) C++", "B) Python", "C) JavaScript", "D) Ruby"),
            array("A) To render graphics", "B) To handle user input", "C) To provide game development tools", "D) To generate random numbers"),
            array("A) Designing game levels", "B) Writing game code", "C) Creating game assets", "D) Testing game performance"),
            array("A) First-Person Shooter", "B) Frames Per Second", "C) Final Production Stage", "D) Full-Page Spread"),
            array("A) To detect collisions between game objects", "B) To simulate realistic physics in games", "C) To create visual effects", "D) To generate random game events"),
            array("A) Loading screen", "B) Game over screen", "C) Game level or area", "D) Main menu"),
            array("A) 2D games are flat with only height and width, while 3D games have depth as well", "B) 2D games are played on consoles, while 3D games are played on PCs", "C) 2D games are simpler and easier to develop than 3D games", "D) 2D games are outdated and no longer popular"),
            array("A) To identify and fix bugs in the game", "B) To ensure the game meets quality standards", "C) To gather feedback from players", "D) To promote the game to a wider audience"),
            array("A) Adding in-app purchases and microtransactions", "B) Offering free game downloads", "C) Including advertisements in the game", "D) Creating game expansions and DLCs"),
            array("A) To create realistic and believable non-player characters (NPCs)", "B) To generate random game levels and environments", "C) To optimize game performance and resource usage", "D) To simulate physics-based interactions in the game world"),
            array("A) To simulate real-world physics in the game", "B) To create visually stunning graphics", "C) To enhance gameplay and player immersion", "D) To generate random game events"),
            array("A) It improves game performance and reduces system requirements", "B) It enhances the visual quality and realism of the game", "C) It reduces development time and costs", "D) It makes the game more accessible to a wider audience"),
            array("A) To create immersive and engaging audio experiences", "B) To provide background music for the game", "C) To enhance the game's atmosphere and mood", "D) To create sound effects for player actions and events"),
            array("A) Balancing the difficulty and challenge of the game", "B) Balancing the in-game economy and resource management", "C) Balancing the strength and abilities of different game characters", "D) Balancing the distribution of rewards and achievements in the game"),
            array("A) Single-player games can only be played by one person, while multiplayer games can be played by multiple people", "B) Single-player games have better graphics and gameplay than multiplayer games", "C) Single-player games are more popular than multiplayer games", "D) Single-player games do not require an internet connection, while multiplayer games do"),
            array("A) To promote and advertise the game to potential players", "B) To generate revenue through game sales and in-app purchases", "C) To gather player feedback and improve the game", "D) To create a community around the game"),
            array("A) To analyze player behavior and preferences", "B) To track game performance and technical issues", "C) To measure the success and impact of marketing campaigns", "D) To optimize game mechanics and design based on player data"),
            array("A) Generating game content or levels algorithmically", "B) Integrating social media features into the game", "C) Creating realistic graphics and visual effects", "D) Translating the game into different languages for international release"),
            array("A) To adapt the game for different regions and cultures", "B) To make the game more challenging and engaging", "C) To add narrative and emotional depth to the game", "D) To create memorable and relatable characters")
        );
    
        $achievement = "Game Devlopment";
        $ytlink="https://www.youtube.com/embed/gB1F9G0JXOo";
        break;
    case "CID6":
        $questions = array(
            "What is an Activity in Android?",
            "What is an Intent in Android?",
            "What is a Content Provider in Android?",
            "What is an AsyncTask in Android?",
            "What is a Fragment in Android?",
            "What is the purpose of the AndroidManifest.xml file in Android?",
            "What is the difference between Serializable and Parcelable in Android?",
            "What is the role of the layout XML file in Android?",
            "What is the purpose of the onCreate() method in an Activity?",
            "What is the purpose of the onResume() method in an Activity?",
            "What is the purpose of the notifyDataSetChanged() method in an Adapter?",
            "What is the difference between match_parent and wrap_content in Android layouts?",
            "What is the purpose of the startActivityForResult() method in Android?",
            "What is the difference between a Service and a BroadcastReceiver in Android?",
            "What is the purpose of the onCreateOptionsMenu() method in Android?",
            "What is the purpose of the SharedPreferences class in Android?",
            "What is the purpose of the RecyclerView in Android?",
            "What is the purpose of the SQLiteOpenHelper class in Android?",
            "What is the purpose of the onTouchEvent() method in Android?"
        );
        
        $answers = array(
            "b",
            "c",
            "a",
            "d",
            "b",
            "c",
            "d",
            "a",
            "b",
            "c",
            "a",
            "b",
            "c",
            "d",
            "a",
            "b",
            "c",
            "d",
            "a",
        );
        
        $options = array(
            array("A) It represents a screen with a user interface", "B) It manages the application's global state", "C) It handles the app's data storage", "D) It handles network communication"),
            array("A) It represents a message passing mechanism between components", "B) It represents a layout resource file", "C) It represents a database table", "D) It represents a user interface component"),
            array("A) It manages the application's global state", "B) It handles network communication", "C) It represents a content provider component", "D) It represents a user interface component"),
            array("A) It is a component that runs in the background", "B) It represents a user interface component", "C) It handles network communication", "D) It represents an asynchronous task"),
            array("A) It represents a database table", "B) It represents a reusable portion of a user interface", "C) It manages the application's global state", "D) It handles network communication"),
            array("A) It defines the structure and metadata of the app", "B) It handles permissions for the app", "C) It specifies the app's components and their configurations", "D) It represents a user interface component"),
            array("A) Serializable is faster and simpler than Parcelable", "B) Parcelable is used for inter-process communication", "C) Serializable is used for inter-process communication", "D) Parcelable requires less memory than Serializable"),
            array("A) It defines the user interface of an Activity", "B) It specifies the permissions required by the app", "C) It handles the logic and data processing of an Activity", "D) It represents a layout resource file"),
            array("A) It is called when the Activity is first created", "B) It is called when the Activity is resumed from the paused state", "C) It is called when the Activity is destroyed", "D) It is called when the Activity is stopped"),
            array("A) To update the data in the Adapter and refresh the associated views", "B) To add a new item to the Adapter's dataset", "C) To remove an item from the Adapter's dataset", "D) To reorder the items in the Adapter's dataset"),
            array("A) match_parent makes the view fill the parent's available space, while wrap_content makes the view adjust its size to fit its content", "B) match_parent and wrap_content have the same behavior", "C) match_parent and wrap_content are deprecated in Android", "D) match_parent and wrap_content are used for different types of views"),
            array("A) To start a new Activity and expect a result from it", "B) To send a broadcast message to other components", "C) To start a new Service", "D) To bind to a Service"),
            array("A) A Service runs in the background and performs long-running operations, while a BroadcastReceiver responds to system-wide events", "B) A Service is used for inter-process communication, while a BroadcastReceiver handles user interactions", "C) A Service is used for inter-app communication, while a BroadcastReceiver handles app permissions", "D) A Service represents a user interface component, while a BroadcastReceiver represents a data storage component"),
            array("A) To create the options menu for an Activity", "B) To handle user input events, such as button clicks", "C) To inflate a layout resource file", "D) To handle the back button press event"),
            array("A) It provides a way to store key-value pairs persistently", "B) It handles network requests and responses", "C) It manages the app's global state", "D) It represents a user interface component"),
            array("A) It is used to display a collection of data items with varying layouts", "B) It is used to store and retrieve data from a local SQLite database", "C) It is used to handle touch events on a view", "D) It is used to play audio and video files"),
            array("A) It provides an interface to interact with an SQLite database", "B) It handles touch events on a view", "C) It manages the app's global state", "D) It represents a user interface component"),
            array("A) It is called when the user touches the screen and performs a gesture", "B) It is called when the user scrolls a view", "C) It is called when the user interacts with a menu item", "D) It is called when the user presses a hardware key"),
            array("A) It is called when the user grants or denies a runtime permission", "B) It is called when the app requests a runtime permission", "C) It is called when the user navigates back from a permission request", "D) It is called when the user launches the app for the first time")
        );
        
        $achievement = "Master In Android";
        $ytlink="https://www.youtube.com/embed/mXjZQX3UzOs";
        break;
    default:
    $questions= "Course Not Found"; $answers= "Course Not Found"; $options= "Course Not Found";
        $achievement = "Course Not Found";
        $ytlink="https://www.youtube.com/embed/VIDEOID";
        break;
}

echo '
<main class="justify-content-center">
    <div class="container bg-secondary m-5">
        <h1>'.$achievement.'</h1>
        
        <div class="video-player m-5">
        
            <div id="video-container" style="display: none;">
                <iframe id="video-frame" width="560" height="315" src="'.$ytlink.'" frameborder="0" allowfullscreen></iframe>
            </div>
            <div id="loading-container" class="text-center">
                <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <div class="video-player m-5">';
        $sql = "SELECT * FROM r_certificates WHERE username = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          if ($row[$course] != "false"){
            $ab="Exam".$course;
            echo '<a href="certificatePage.php?course='.$achievement.'&name='. $recipientName.'&date='.$row[$ab].'" class="btn btn-primary btn-fullscreen my-3">Go certificate</a>';
          }else{
            printtest($conn,$questions, $answers, $options,$achievement, $recipientName,$issuedDate,$course,$email);
          }
        }
        echo '</div>
    </div>
</main>   
</body> 
</html>
';

echo '
<script>
    window.addEventListener("DOMContentLoaded", function() {
        var videoContainer = document.getElementById("video-container");
        var loadingContainer = document.getElementById("loading-container");
        var videoFrame = document.getElementById("video-frame");

        videoFrame.addEventListener("load", function() {
            videoContainer.style.display = "block";
            loadingContainer.style.display = "none";
        });

        videoFrame.addEventListener("error", function() {
            videoContainer.style.display = "none";
            loadingContainer.style.display = "none";
        });
    });
</script>
';
