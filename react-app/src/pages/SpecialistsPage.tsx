
import '@/styles/pages/specialists.scss';
import {specialists} from '@/mokData/specs';
import {SpecialistsPageCard} from "@/components/specialists/SpecialistsPageCard";
import {useGetSpecsQuery} from "@/core/api/specialitiesApi";
export function SpecialistsPage() {
    const {data} = useGetSpecsQuery(0);
    return (
        <>
            <h1 className='page-title'>Специалисты</h1>
            <section className='specialists'>

            <div className='specialists-container'>
                {data?.specs.map(
                    spec => <SpecialistsPageCard key={spec.id} specialist={spec}/>
                )}
            </div>
        </section>
        </>
    );
}
