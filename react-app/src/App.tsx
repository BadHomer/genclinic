import {BrowserRouter as Router, Route, Routes} from "react-router-dom";
import {Layout} from "@/components/layouts/Layout";
import {IndexPage} from "@/pages/IndexPage";

import '@/styles/app.scss'
import {NewsPage} from "@/pages/NewsPage";
import {SpecialistsPage} from "@/pages/SpecialistsPage";


function App() {

    return (
        <>
            <Router>
                <Routes>
                    <Route path={"/"} element={<Layout/>}>
                        <Route index element={<IndexPage/>}/>
                        <Route path={'news'} element={<NewsPage/>}/>
                        <Route path={'specialists'} element={<SpecialistsPage/>}/>
                    </Route>
                </Routes>

            </Router>

        </>
    )
}

export default App
