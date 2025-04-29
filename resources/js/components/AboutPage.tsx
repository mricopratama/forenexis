import React from "react";
import { motion } from "framer-motion";
import {
    Github,
    Linkedin,
    Mail,
    ExternalLink,
    Code,
    Palette,
    Lightbulb,
    Award,
    Search,
    Shield,
} from "lucide-react";

const AboutPage: React.FC = () => {
    const fadeIn = {
        hidden: { opacity: 0, y: 20 },
        visible: {
            opacity: 1,
            y: 0,
            transition: { duration: 0.6 },
        },
    };

    const staggerContainer = {
        hidden: { opacity: 0 },
        visible: {
            opacity: 1,
            transition: {
                staggerChildren: 0.2,
            },
        },
    };

    const skillItem = {
        hidden: { opacity: 0, x: -20 },
        visible: {
            opacity: 1,
            x: 0,
            transition: { duration: 0.5 },
        },
    };

    const skills = [
        {
            name: "Frontend Development",
            icon: <Code className="w-5 h-5" />,
            description: "Creating responsive and interactive user interfaces",
        },
        {
            name: "UI/UX Design",
            icon: <Palette className="w-5 h-5" />,
            description: "Designing intuitive and beautiful user experiences",
        },
        {
            name: "Creative Problem Solving",
            icon: <Lightbulb className="w-5 h-5" />,
            description: "Finding innovative solutions to complex problems",
        },
        {
            name: "Award-Winning Design",
            icon: <Award className="w-5 h-5" />,
            description: "Recognized for excellence in digital design",
        },
        {
            name: "Digital Forensics",
            icon: <Search className="w-5 h-5" />,
            description:
                "Investigating cyber threats and analyzing digital evidence",
        },
        {
            name: "Cybersecurity",
            icon: <Shield className="w-5 h-5" />,
            description: "Protecting systems and data from cyber threats",
        },
    ];

    const centerStagger = (items) => {
        const centerIndex = Math.floor(items.length / 2);

        return items.map((_, index) => {
            const distanceFromCenter = Math.abs(index - centerIndex);
            return {
                hidden: { opacity: 0, y: 50 },
                visible: {
                    opacity: 1,
                    y: 0,
                    transition: {
                        delay: distanceFromCenter * 0.1,
                        duration: 0.6,
                    },
                },
            };
        });
    };

    return (
        <div className="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white">
            {/* Animated background elements */}
            <div className="absolute inset-0 overflow-hidden">
                {[...Array(20)].map((_, i) => (
                    <motion.div
                        key={i}
                        className="absolute rounded-full bg-blue-500/10"
                        style={{
                            width: Math.random() * 300 + 50,
                            height: Math.random() * 300 + 50,
                            left: `${Math.random() * 100}%`,
                            top: `${Math.random() * 100}%`,
                        }}
                        animate={{
                            x: [0, Math.random() * 100 - 50],
                            y: [0, Math.random() * 100 - 50],
                        }}
                        transition={{
                            duration: Math.random() * 20 + 10,
                            repeat: Infinity,
                            repeatType: "reverse",
                            ease: "easeInOut",
                        }}
                    />
                ))}
            </div>

            <div className="relative z-10 container mx-auto px-4 py-20">
                {/* Header with animated entrance */}
                <motion.div
                    initial="hidden"
                    animate="visible"
                    variants={fadeIn}
                    className="mb-16 text-center"
                >
                    <motion.h1
                        className="text-5xl md:text-7xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-600"
                        initial={{ opacity: 0, scale: 0.8 }}
                        animate={{ opacity: 1, scale: 1 }}
                        transition={{ duration: 0.8 }}
                    >
                        About Me
                    </motion.h1>
                    <motion.div
                        className="h-1 w-24 bg-blue-500 mx-auto mb-8"
                        initial={{ width: 0 }}
                        animate={{ width: 96 }}
                        transition={{ duration: 1, delay: 0.4 }}
                    />
                </motion.div>

                {/* Main content with photo and text */}
                <div className="relative grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                    {/* Photo with animated border */}
                    <motion.div
                        initial={{ opacity: 0, x: -50 }}
                        animate={{ opacity: 1, x: 0 }}
                        transition={{ duration: 0.8 }}
                        className="relative"
                    >
                        <motion.div
                            className="absolute inset-0 border-2 border-blue-500 rounded-lg"
                            animate={{
                                rotate: [0, 2, 0, -2, 0],
                            }}
                            transition={{
                                duration: 6,
                                repeat: Infinity,
                                ease: "easeInOut",
                            }}
                        />
                        <img
                            src="/img/profile.jpg"
                            alt="Professional portrait"
                            className="rounded-lg object-cover w-full h-[500px] relative z-10"
                        />
                        <motion.div
                            className="absolute bottom-4 -right-4 bg-gradient-to-r from-blue-600 to-purple-600 p-4 rounded-lg shadow-xl z-20"
                            initial={{ opacity: 0, scale: 0.8, y: 20 }}
                            animate={{ opacity: 1, scale: 1 }}
                            transition={{ duration: 0.5, delay: 1 }}
                        >
                            <p className="text-lg font-bold">
                                5+ Years Experience
                            </p>
                            <p className="text-sm opacity-80">
                                Digital Design & Development
                            </p>
                        </motion.div>
                    </motion.div>

                    {/* Bio text with staggered animation */}
                    <motion.div
                        initial={{ opacity: 0, x: 50 }}
                        animate={{ opacity: 1, x: 0 }}
                        transition={{ duration: 0.8 }}
                    >
                        <motion.h2
                            className="text-3xl font-bold mb-6 text-blue-400"
                            initial={{ opacity: 0 }}
                            animate={{ opacity: 1 }}
                            transition={{ delay: 0.3 }}
                        >
                            Creative Designer & Developer
                        </motion.h2>

                        <motion.div
                            variants={staggerContainer}
                            initial="hidden"
                            animate="visible"
                        >
                            <motion.p
                                variants={fadeIn}
                                className="text-lg mb-4 text-gray-300 leading-relaxed"
                            >
                                Hello! I'm a passionate designer and developer
                                with a keen eye for detail and a love for
                                creating beautiful, functional digital
                                experiences.
                            </motion.p>

                            <motion.p
                                variants={fadeIn}
                                className="text-lg mb-6 text-gray-300 leading-relaxed"
                            >
                                My journey in the digital world began over 5
                                years ago, and since then, I've had the
                                privilege of working with amazing clients and
                                teams to bring creative visions to life. I
                                believe in the power of thoughtful design and
                                clean code to solve real problems.
                            </motion.p>

                            <motion.p
                                variants={fadeIn}
                                className="text-lg mb-8 text-gray-300 leading-relaxed"
                            >
                                When I'm not designing or coding, you can find
                                me exploring new technologies, contributing to
                                open-source projects, or seeking inspiration in
                                nature and art.
                            </motion.p>
                        </motion.div>

                        {/* Social links with hover animations */}
                        <motion.div
                            className="flex space-x-4"
                            initial={{ opacity: 0 }}
                            animate={{ opacity: 1 }}
                            transition={{ delay: 1.2 }}
                        >
                            <motion.a
                                href="#"
                                className="p-3 bg-gray-800 rounded-full hover:bg-blue-600 transition-colors duration-300"
                                whileHover={{ y: -5, scale: 1.1 }}
                                whileTap={{ scale: 0.95 }}
                            >
                                <Github className="w-5 h-5" />
                            </motion.a>
                            <motion.a
                                href="#"
                                className="p-3 bg-gray-800 rounded-full hover:bg-blue-600 transition-colors duration-300"
                                whileHover={{ y: -5, scale: 1.1 }}
                                whileTap={{ scale: 0.95 }}
                            >
                                <Linkedin className="w-5 h-5" />
                            </motion.a>
                            <motion.a
                                href="#"
                                className="p-3 bg-gray-800 rounded-full hover:bg-blue-600 transition-colors duration-300"
                                whileHover={{ y: -5, scale: 1.1 }}
                                whileTap={{ scale: 0.95 }}
                            >
                                <Mail className="w-5 h-5" />
                            </motion.a>
                        </motion.div>
                    </motion.div>
                </div>

                {/* Skills section with animated cards */}
                <motion.div
                    initial={{ opacity: 0, y: 50 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.8 }}
                    className="mb-20"
                >
                    <motion.h2
                        className="text-3xl font-bold mb-12 text-center text-blue-400"
                        initial={{ opacity: 0 }}
                        animate={{ opacity: 1 }}
                        transition={{ delay: 0.3 }}
                    >
                        My Expertise
                    </motion.h2>

                    <motion.div
                        className="grid grid-cols-4 gap-6 auto-rows-min"
                        variants={staggerContainer}
                        initial="hidden"
                        animate="visible"
                    >
                        {skills.map((skill, index) => {
                            let positionClass = "";

                            if (skills.length === 5) {
                                if (index < 4) positionClass = "col-span-1";
                                else positionClass = "col-span-2 col-start-2"; // Pusatkan item terakhir
                            } else if (
                                skills.length % 2 === 0 &&
                                index === skills.length - 2
                            ) {
                                if (index < 4) positionClass = "col-span-1";
                                else positionClass = "col-span-1 col-start-2"; // Baris kedua sejajar dengan atas
                            } else if (skills.length === 7) {
                                if (index < 4) positionClass = "col-span-1";
                                else if (index > 4)
                                    positionClass = "col-span-2";
                                else positionClass = "col-span-2 col-start-2"; // Tiga item terakhir dipusatkan
                            } else if (skills.length === 8) {
                                if (index < 4) positionClass = "col-span-1";
                                else positionClass = "col-span-1"; // Dua baris penuh
                            }

                            return (
                                <motion.div
                                    key={index}
                                    variants={centerStagger(skills)[index]}
                                    whileHover={{
                                        y: -10,
                                        boxShadow:
                                            "0 10px 25px -5px rgba(59, 130, 246, 0.5)",
                                    }}
                                    className={`bg-gray-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-700 hover:border-blue-500 transition-all duration-300 ${positionClass}`}
                                >
                                    <div className="bg-blue-600/20 p-3 rounded-lg inline-block mb-4">
                                        {skill.icon}
                                    </div>
                                    <h3 className="text-xl font-bold mb-2">
                                        {skill.name}
                                    </h3>
                                    <p className="text-gray-400">
                                        {skill.description}
                                    </p>
                                </motion.div>
                            );
                        })}
                    </motion.div>
                </motion.div>

                {/* Timeline section */}
                <motion.div
                    initial={{ opacity: 0, y: 50 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.8, delay: 0.2 }}
                    className="mb-20"
                >
                    <motion.h2
                        className="text-3xl font-bold mb-12 text-center text-blue-400"
                        initial={{ opacity: 0 }}
                        animate={{ opacity: 1 }}
                        transition={{ delay: 0.3 }}
                    >
                        My Journey
                    </motion.h2>

                    <div className="relative">
                        {/* Vertical line */}
                        <motion.div
                            className="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-500/30"
                            initial={{ height: 0 }}
                            animate={{ height: "100%" }}
                            transition={{ duration: 1.5, ease: "easeInOut" }}
                        />

                        {/* Timeline items */}
                        <div className="space-y-12">
                            {[
                                {
                                    year: "2023",
                                    title: "Senior Designer",
                                    company: "Creative Studio",
                                    description:
                                        "Led design team for major client projects and brand redesigns",
                                },
                                {
                                    year: "2021",
                                    title: "UX Developer",
                                    company: "Tech Innovations",
                                    description:
                                        "Developed interactive prototypes and implemented frontend solutions",
                                },
                                {
                                    year: "2019",
                                    title: "Junior Designer",
                                    company: "Digital Agency",
                                    description:
                                        "Created visual assets and assisted with UI/UX design projects",
                                },
                                {
                                    year: "2018",
                                    title: "Design Intern",
                                    company: "StartUp Inc.",
                                    description:
                                        "Learned fundamentals of digital design and product development",
                                },
                            ].map((item, index) => (
                                <motion.div
                                    key={index}
                                    className={`flex items-center ${
                                        index % 2 === 0
                                            ? "flex-row"
                                            : "flex-row-reverse"
                                    }`}
                                    initial={{ opacity: 0, y: 50 }}
                                    animate={{ opacity: 1, y: 0 }}
                                    transition={{
                                        duration: 0.6,
                                        delay: 0.2 * index,
                                    }}
                                >
                                    <div
                                        className={`w-1/2 ${
                                            index % 2 === 0
                                                ? "pr-12 text-right"
                                                : "pl-12 text-left"
                                        }`}
                                    >
                                        <motion.div
                                            whileHover={{ scale: 1.05 }}
                                            className="bg-gray-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-700 hover:border-blue-500 transition-all duration-300"
                                        >
                                            <h3 className="text-xl font-bold text-blue-400">
                                                {item.title}
                                            </h3>
                                            <p className="text-gray-300 font-medium">
                                                {item.company}
                                            </p>
                                            <p className="text-gray-400 mt-2">
                                                {item.description}
                                            </p>
                                        </motion.div>
                                    </div>

                                    <motion.div
                                        className="absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full bg-blue-600 border-4 border-gray-900 flex items-center justify-center z-10"
                                        initial={{ scale: 0 }}
                                        animate={{ scale: 1 }}
                                        transition={{
                                            duration: 0.4,
                                            delay: 0.4 + 0.2 * index,
                                        }}
                                    >
                                        <span className="text-xs font-bold">
                                            {item.year}
                                        </span>
                                    </motion.div>

                                    <div className="w-1/2"></div>
                                </motion.div>
                            ))}
                        </div>
                    </div>
                </motion.div>

                {/* Call to action */}
                <motion.div
                    initial={{ opacity: 0, y: 30 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.8, delay: 0.4 }}
                    className="text-center"
                >
                    <motion.div
                        className="bg-gradient-to-r from-blue-600 to-purple-600 p-10 rounded-2xl"
                        whileHover={{ scale: 1.02 }}
                        transition={{ duration: 0.3 }}
                    >
                        <h2 className="text-3xl font-bold mb-4">
                            Let's Work Together
                        </h2>
                        <p className="text-lg mb-6 max-w-2xl mx-auto">
                            I'm always open to discussing new projects, creative
                            ideas or opportunities to be part of your vision.
                        </p>
                        <motion.a
                            href="/project"
                            className="inline-flex items-center px-6 py-3 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-colors duration-300"
                            whileHover={{ scale: 1.05 }}
                            whileTap={{ scale: 0.95 }}
                        >
                            View My Work
                            <ExternalLink className="ml-2 w-4 h-4" />
                        </motion.a>
                    </motion.div>
                </motion.div>
            </div>
        </div>
    );
};

export default AboutPage;
