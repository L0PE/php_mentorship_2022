var classes = [
    {
        "name": "App\\Controller\\TextController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "processText",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "textByHash",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "exportAsXlsx",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "exportAsXml",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "exportAsCsv",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "globalStatistic",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 7,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 10,
        "ccn": 4,
        "ccnMethodMax": 3,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\RequestStack",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\System\\UseCases\\Factory\\StatisticUseCaseFactory",
            "App\\Repository\\TextRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\Repository\\TextRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\StreamedResponse",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\Repository\\TextRepository",
            "Symfony\\Component\\HttpFoundation\\StreamedResponse",
            "App\\System\\UseCases\\ImportXlsxStatisticUseCase",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\Repository\\TextRepository",
            "App\\System\\UseCases\\ImportXmlStatisticUseCase",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\StreamedResponse",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\Repository\\TextRepository",
            "Symfony\\Component\\HttpFoundation\\StreamedResponse",
            "App\\System\\UseCases\\ImportCsvStatisticUseCase",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\Repository\\TextRepository",
            "DateTime",
            "DateTime"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 5,
        "length": 154,
        "vocabulary": 46,
        "volume": 850.63,
        "difficulty": 4.6,
        "effort": 3916.85,
        "level": 0.22,
        "bugs": 0.28,
        "time": 218,
        "intelligentContent": 184.73,
        "number_operators": 22,
        "number_operands": 132,
        "number_operators_unique": 3,
        "number_operands_unique": 43,
        "cloc": 6,
        "loc": 66,
        "lloc": 60,
        "mi": 62.67,
        "mIwoC": 40.16,
        "commentWeight": 22.51,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 144,
        "relativeDataComplexity": 0.69,
        "relativeSystemComplexity": 144.69,
        "totalStructuralComplexity": 1008,
        "totalDataComplexity": 4.85,
        "totalSystemComplexity": 1012.85,
        "package": "App\\Controller\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 11,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Entity\\Text",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSentences",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWordsFromSentence",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAllWords",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWords",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getId",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHash",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getText",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isPalindrome",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setIsPalindrome",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getReversedText",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setReversedText",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getReversedWords",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setReversedWords",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getNumberOfCharacters",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getNumberOfWords",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getNumberOfSentences",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getNumberOfPalindromes",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setNumberOfPalindromes",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAverageWordLength",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setAverageWordLength",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAverageNumberOfWordsInSentence",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setAverageNumberOfWordsInSentence",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getFrequencyOfCharacters",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setFrequencyOfCharacters",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDistributionOfCharacters",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setDistributionOfCharacters",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getMostUsedWords",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setMostUsedWords",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLongestWords",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLongestWords",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getShortestWords",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setShortestWords",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLongestSentences",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLongestSentences",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getShortestSentences",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setShortestSentences",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLongestPalindromes",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLongestPalindromes",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTakenTime",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTakenTime",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCreatedAt",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setCreatedAt",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 43,
        "nbMethods": 8,
        "nbMethodsPrivate": 1,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 19,
        "nbMethodsSetters": 16,
        "wmc": 8,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "DateTime"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 182,
        "vocabulary": 35,
        "volume": 933.53,
        "difficulty": 4.09,
        "effort": 3818.98,
        "level": 0.24,
        "bugs": 0.31,
        "time": 212,
        "intelligentContent": 228.2,
        "number_operators": 47,
        "number_operands": 135,
        "number_operators_unique": 2,
        "number_operands_unique": 33,
        "cloc": 118,
        "loc": 320,
        "lloc": 202,
        "mi": 69.18,
        "mIwoC": 28.78,
        "commentWeight": 40.4,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 5.29,
        "relativeSystemComplexity": 21.29,
        "totalStructuralComplexity": 688,
        "totalDataComplexity": 227.4,
        "totalSystemComplexity": 915.4,
        "package": "App\\Entity\\",
        "pageRank": 0.38,
        "afferentCoupling": 3,
        "efferentCoupling": 1,
        "instability": 0.25,
        "violations": {}
    },
    {
        "name": "App\\Kernel",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "parents": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "implements": [],
        "lcom": 0,
        "length": 0,
        "vocabulary": 0,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 0,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 0,
        "number_operators_unique": 0,
        "number_operands_unique": 0,
        "cloc": 0,
        "loc": 5,
        "lloc": 5,
        "mi": 171,
        "mIwoC": 171,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Repository\\TextRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "remove",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "findOneByHash",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getGlobalStatistic",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "findLastTen",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 6,
        "nbMethods": 6,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 6,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 10,
        "ccn": 5,
        "ccnMethodMax": 3,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry",
            "App\\Entity\\Text",
            "App\\Entity\\Text",
            "Doctrine\\ORM\\Query\\Expr\\Select"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 3,
        "length": 69,
        "vocabulary": 32,
        "volume": 345,
        "difficulty": 4.36,
        "effort": 1503.21,
        "level": 0.23,
        "bugs": 0.12,
        "time": 84,
        "intelligentContent": 79.18,
        "number_operators": 8,
        "number_operands": 61,
        "number_operators_unique": 4,
        "number_operands_unique": 28,
        "cloc": 18,
        "loc": 57,
        "lloc": 39,
        "mi": 85.09,
        "mIwoC": 46.85,
        "commentWeight": 38.23,
        "kanDefect": 0.36,
        "relativeStructuralComplexity": 324,
        "relativeDataComplexity": 0.24,
        "relativeSystemComplexity": 324.24,
        "totalStructuralComplexity": 1944,
        "totalDataComplexity": 1.42,
        "totalSystemComplexity": 1945.42,
        "package": "App\\Repository\\",
        "pageRank": 0.19,
        "afferentCoupling": 8,
        "efferentCoupling": 4,
        "instability": 0.33,
        "violations": {}
    },
    {
        "name": "App\\System\\Processor\\TextProcessor",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "averageWordLength",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "averageWordsInSentence",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "distributionOfCharactersAsPercentage",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "frequencyOfCharacters",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getReversedText",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTextInReversedOrder",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isTextPalindrome",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "numberOfPalindromes",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "topLongestPalindromes",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "topLongestSentences",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "topLongestWords",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "topShortestSentences",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "topShortestWords",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "topUsedWord",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getArrayWithLength",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getPalindromes",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getReversedString",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 18,
        "nbMethods": 18,
        "nbMethodsPrivate": 3,
        "nbMethodsPublic": 15,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 18,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\Entity\\Text"
        ],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 163,
        "vocabulary": 29,
        "volume": 791.85,
        "difficulty": 13.75,
        "effort": 10887.95,
        "level": 0.07,
        "bugs": 0.26,
        "time": 605,
        "intelligentContent": 57.59,
        "number_operators": 31,
        "number_operands": 132,
        "number_operators_unique": 5,
        "number_operands_unique": 24,
        "cloc": 7,
        "loc": 122,
        "lloc": 115,
        "mi": 52.75,
        "mIwoC": 34.62,
        "commentWeight": 18.13,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 529,
        "relativeDataComplexity": 0.17,
        "relativeSystemComplexity": 529.17,
        "totalStructuralComplexity": 9522,
        "totalDataComplexity": 3.13,
        "totalSystemComplexity": 9525.13,
        "package": "App\\System\\Processor\\",
        "pageRank": 0.06,
        "afferentCoupling": 1,
        "efferentCoupling": 1,
        "instability": 0.5,
        "violations": {}
    },
    {
        "name": "App\\System\\UseCases\\Factory\\StatisticUseCaseFactory",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getUseCase",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 4,
        "ccnMethodMax": 4,
        "externals": [
            "App\\Repository\\TextRepository",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Contracts\\HttpClient\\HttpClientInterface",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\System\\UseCases\\GetTextStatisticUseCase",
            "App\\System\\UseCases\\GetTextStatisticFromUrlUseCase",
            "App\\System\\UseCases\\GetTextStatisticFromFileCase"
        ],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 34,
        "vocabulary": 11,
        "volume": 117.62,
        "difficulty": 3,
        "effort": 352.86,
        "level": 0.33,
        "bugs": 0.04,
        "time": 20,
        "intelligentContent": 39.21,
        "number_operators": 7,
        "number_operands": 27,
        "number_operators_unique": 2,
        "number_operands_unique": 9,
        "cloc": 0,
        "loc": 20,
        "lloc": 20,
        "mi": 56.58,
        "mIwoC": 56.58,
        "commentWeight": 0,
        "kanDefect": 0.36,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 3.25,
        "relativeSystemComplexity": 4.25,
        "totalStructuralComplexity": 2,
        "totalDataComplexity": 6.5,
        "totalSystemComplexity": 8.5,
        "package": "App\\System\\UseCases\\Factory\\",
        "pageRank": 0.04,
        "afferentCoupling": 1,
        "efferentCoupling": 8,
        "instability": 0.89,
        "violations": {}
    },
    {
        "name": "App\\System\\UseCases\\GetTextStatisticFromFileCase",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "handle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 4,
        "ccnMethodMax": 4,
        "externals": [
            "App\\Repository\\TextRepository",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\File\\UploadedFile",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\System\\UseCases\\GetTextStatisticUseCase"
        ],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 21,
        "vocabulary": 12,
        "volume": 75.28,
        "difficulty": 2.67,
        "effort": 200.76,
        "level": 0.38,
        "bugs": 0.03,
        "time": 11,
        "intelligentContent": 28.23,
        "number_operators": 5,
        "number_operands": 16,
        "number_operators_unique": 3,
        "number_operands_unique": 9,
        "cloc": 0,
        "loc": 14,
        "lloc": 14,
        "mi": 61.32,
        "mIwoC": 61.32,
        "commentWeight": 0,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 0.75,
        "relativeSystemComplexity": 25.75,
        "totalStructuralComplexity": 50,
        "totalDataComplexity": 1.5,
        "totalSystemComplexity": 51.5,
        "package": "App\\System\\UseCases\\",
        "pageRank": 0.04,
        "afferentCoupling": 1,
        "efferentCoupling": 6,
        "instability": 0.86,
        "violations": {}
    },
    {
        "name": "App\\System\\UseCases\\GetTextStatisticFromUrlUseCase",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "handle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Repository\\TextRepository",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Contracts\\HttpClient\\HttpClientInterface",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\System\\UseCases\\GetTextStatisticUseCase"
        ],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 22,
        "vocabulary": 14,
        "volume": 83.76,
        "difficulty": 3.4,
        "effort": 284.79,
        "level": 0.29,
        "bugs": 0.03,
        "time": 16,
        "intelligentContent": 24.64,
        "number_operators": 5,
        "number_operands": 17,
        "number_operators_unique": 4,
        "number_operands_unique": 10,
        "cloc": 0,
        "loc": 15,
        "lloc": 15,
        "mi": 60.61,
        "mIwoC": 60.61,
        "commentWeight": 0,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 1,
        "relativeSystemComplexity": 17,
        "totalStructuralComplexity": 32,
        "totalDataComplexity": 2,
        "totalSystemComplexity": 34,
        "package": "App\\System\\UseCases\\",
        "pageRank": 0.04,
        "afferentCoupling": 1,
        "efferentCoupling": 6,
        "instability": 0.86,
        "violations": {}
    },
    {
        "name": "App\\System\\UseCases\\GetTextStatisticUseCase",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "handle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Repository\\TextRepository",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Entity\\Text",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\Entity\\Text",
            "App\\System\\Processor\\TextProcessor",
            "DateTime"
        ],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 59,
        "vocabulary": 18,
        "volume": 246.03,
        "difficulty": 9.23,
        "effort": 2271.01,
        "level": 0.11,
        "bugs": 0.08,
        "time": 126,
        "intelligentContent": 26.65,
        "number_operators": 11,
        "number_operands": 48,
        "number_operators_unique": 5,
        "number_operands_unique": 13,
        "cloc": 0,
        "loc": 39,
        "lloc": 39,
        "mi": 48.28,
        "mIwoC": 48.28,
        "commentWeight": 0,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 529,
        "relativeDataComplexity": 0.19,
        "relativeSystemComplexity": 529.19,
        "totalStructuralComplexity": 1058,
        "totalDataComplexity": 0.38,
        "totalSystemComplexity": 1058.38,
        "package": "App\\System\\UseCases\\",
        "pageRank": 0.08,
        "afferentCoupling": 3,
        "efferentCoupling": 7,
        "instability": 0.7,
        "violations": {}
    },
    {
        "name": "App\\System\\UseCases\\ImportCsvStatisticUseCase",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "handle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Repository\\TextRepository",
            "PhpOffice\\PhpSpreadsheet\\Spreadsheet",
            "PhpOffice\\PhpSpreadsheet\\Writer\\Csv"
        ],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 40,
        "vocabulary": 11,
        "volume": 138.38,
        "difficulty": 6.38,
        "effort": 882.16,
        "level": 0.16,
        "bugs": 0.05,
        "time": 49,
        "intelligentContent": 21.71,
        "number_operators": 6,
        "number_operands": 34,
        "number_operators_unique": 3,
        "number_operands_unique": 8,
        "cloc": 0,
        "loc": 19,
        "lloc": 19,
        "mi": 56.84,
        "mIwoC": 56.84,
        "commentWeight": 0,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 576,
        "relativeDataComplexity": 0.08,
        "relativeSystemComplexity": 576.08,
        "totalStructuralComplexity": 1152,
        "totalDataComplexity": 0.16,
        "totalSystemComplexity": 1152.16,
        "package": "App\\System\\UseCases\\",
        "pageRank": 0.04,
        "afferentCoupling": 1,
        "efferentCoupling": 3,
        "instability": 0.75,
        "violations": {}
    },
    {
        "name": "App\\System\\UseCases\\ImportXlsxStatisticUseCase",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "handle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Repository\\TextRepository",
            "PhpOffice\\PhpSpreadsheet\\Spreadsheet",
            "PhpOffice\\PhpSpreadsheet\\Writer\\Xlsx"
        ],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 60,
        "vocabulary": 31,
        "volume": 297.25,
        "difficulty": 2.89,
        "effort": 859.91,
        "level": 0.35,
        "bugs": 0.1,
        "time": 48,
        "intelligentContent": 102.75,
        "number_operators": 6,
        "number_operands": 54,
        "number_operators_unique": 3,
        "number_operands_unique": 28,
        "cloc": 0,
        "loc": 19,
        "lloc": 19,
        "mi": 54.52,
        "mIwoC": 54.52,
        "commentWeight": 0,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 576,
        "relativeDataComplexity": 0.08,
        "relativeSystemComplexity": 576.08,
        "totalStructuralComplexity": 1152,
        "totalDataComplexity": 0.16,
        "totalSystemComplexity": 1152.16,
        "package": "App\\System\\UseCases\\",
        "pageRank": 0.04,
        "afferentCoupling": 1,
        "efferentCoupling": 3,
        "instability": 0.75,
        "violations": {}
    },
    {
        "name": "App\\System\\UseCases\\ImportXmlStatisticUseCase",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "handle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Repository\\TextRepository",
            "Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer",
            "Symfony\\Component\\Serializer\\Encoder\\XmlEncoder",
            "Symfony\\Component\\Serializer\\Serializer"
        ],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 12,
        "vocabulary": 8,
        "volume": 36,
        "difficulty": 2.4,
        "effort": 86.4,
        "level": 0.42,
        "bugs": 0.01,
        "time": 5,
        "intelligentContent": 15,
        "number_operators": 4,
        "number_operands": 8,
        "number_operators_unique": 3,
        "number_operands_unique": 5,
        "cloc": 0,
        "loc": 15,
        "lloc": 15,
        "mi": 63.18,
        "mIwoC": 63.18,
        "commentWeight": 0,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 4,
        "relativeDataComplexity": 1,
        "relativeSystemComplexity": 5,
        "totalStructuralComplexity": 8,
        "totalDataComplexity": 2,
        "totalSystemComplexity": 10,
        "package": "App\\System\\UseCases\\",
        "pageRank": 0.04,
        "afferentCoupling": 1,
        "efferentCoupling": 4,
        "instability": 0.8,
        "violations": {}
    }
]